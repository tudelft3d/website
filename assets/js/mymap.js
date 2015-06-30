L.CRS.proj4js = (function () {
              var createProjection = function (code, def, /*L.Transformation*/ transformation) {
                if (typeof(def) !== 'undefined') {
                  Proj4js.defs[code] = def;
                }
                var proj = new Proj4js.Proj(code);
                
                return {
                  project: function (latlng) {
                    var point = new L.Point(latlng.lng, latlng.lat);
                    return Proj4js.transform(Proj4js.WGS84, proj, point);
                  },

                  unproject: function (point, unbounded) {
                    var point2 = Proj4js.transform(proj, Proj4js.WGS84, point.clone());
                    return new L.LatLng(point2.y, point2.x, unbounded);
                  }
                };
              };

              return function (code, def, transformation) {
                return L.Util.extend({}, L.CRS, {
                  code: code,
                  transformation: transformation ? transformation: new L.Transformation(1, 0, -1, 0),
                  projection: createProjection(code, def)
                });
              };
            }());
            
            // maak een array met de resoluties benodigd voor het tileschema:
            var rd_res = [3440.640, 1720.320, 860.160, 430.080, 215.040, 107.520, 53.760, 26.880, 13.440, 6.720, 3.360, 1.680, 0.840, 0.420];
            // maak van de projectiestring voor het Rijksdriehoekstelsel een Leaflet projectie object:
            var rd = L.CRS.proj4js('EPSG:28992', 
                '+proj=sterea +lat_0=52.15616055555555 +lon_0=5.38763888888889 +k=0.9999079 +x_0=155000 +y_0=463000 ' + 
                '+ellps=bessel +units=m ' + 
                '+towgs84=565.2369,50.0087,465.658,-0.406857330322398,0.350732676542563,-1.8703473836068,4.0812 +no_defs',
                new L.Transformation(
                    1,
                    285401.920,
                    -1,
                    903401.920
                ));
            // Override de scale instelling voor het schema:
            rd.scale = function(zoom) {
                return 1 / rd_res[zoom];
            };
            // Kaart initialiseren:    
            var map = new L.Map('map', {
                continuousWorld: true,
                crs: rd,
                layers: [
                    new L.TileLayer(
                        'https://www.openbasiskaart.nl/mapcache/tms/1.0.0/osm@rd/{z}/{x}/{y}.png', {
                            tms: true,
                            minZoom: 1,
                            maxZoom: 13,
                            attribution: '© <a href="http://www.openbasiskaart.nl">openbasiskaart.nl</a>',
                            continuousWorld: true
                        }
                    )
                ],
                center: new L.LatLng(52.004713,4.370334),
                zoom: 10
            });
            var marker = L.marker([52.004713,4.370334]).addTo(map);
            marker.bindPopup("<b>Faculty of Architecture & the Built Environment<br>Julianalaan 134, 2628BL Delft</b><br>(our office (BG.WEST.010) is roughly where the arrow is, on the ground floor)").openPopup();

