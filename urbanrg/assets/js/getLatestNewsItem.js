function getLatestNewsItem() {

	news_url = get_root_url() + "news/news.html";
	//console.log("--news_url", news_url);

	function stringToHTML (text) {
		let parser = new DOMParser();
		let doc = parser.parseFromString(text, 'text/html');
		return doc.body;
	}

	fetch(news_url).then(function (response) {
		if (response.ok) {
			return response.text();
		}
		throw response;
	}).then(function (text) {
		let upcoming_events;
		let upcoming_event;
		let upcoming_event_title;
		let upcoming_event_date;
		let upcoming_event_href;
		let latest_news;
		let latest_news_title;
		let latest_news_date;
		let latest_news_href;
		
		let html = stringToHTML(text);

		// Get the target elements in index.html
		let sidebar_next_event_date = document.getElementById("sidebar-upcoming-date");
		let sidebar_next_event_title = document.getElementById("sidebar-upcoming-title");
		//console.log("sidebar_next_event_date", sidebar_next_event_date);
		//console.log("sidebar_next_event_title", sidebar_next_event_title);		

		// Get the upcoming events
		upcoming_events = html.querySelectorAll(".news-body.news-body-upcoming");
		//console.log("upcoming_events", upcoming_events);
		//console.log("upcoming_events.length", upcoming_events.length);
		//upcoming_events = []; // only for debugging purpose
		
		if(upcoming_events.length < 1 || upcoming_events == undefined){
			//console.log("No upcoming_events found");
			// array is empty or undefined
			// Update the target elements in index.html		
			sidebar_next_event_date.innerHTML = "";
			sidebar_next_event_title.innerHTML = "No upcoming events";
			sidebar_next_event_title.href = "#";
		} else {
			//console.log(upcoming_events.length," upcoming event(s) found");
			// Get the next upcoming event
			upcoming_event = upcoming_events[upcoming_events.length - 1];
			//console.log("upcoming_event", upcoming_event);
			sidebar_next_event_title.innerHTML = upcoming_event.querySelector("p.news-title > .news-event-title").innerHTML;
			sidebar_next_event_date.innerHTML = upcoming_event.querySelector("p.news-meta > .news-event-date").innerHTML;
			sidebar_next_event_title.href = news_url + "#" + upcoming_event.id;
		}

		// Get the target elements in index.html
		let sidebar_last_event_date = document.getElementById("sidebar-news-date");
		let sidebar_last_event_title = document.getElementById("sidebar-news-title");
		//console.log("sidebar_last_event_date", sidebar_last_event_date);
		//console.log("sidebar_last_event_title", sidebar_last_event_title);		

		// Get the latest news i.e. the first in order
		latest_news = html.querySelector("div.news-body:not(.news-body-upcoming)");
		//console.log("latest_news", latest_news");
		sidebar_last_event_title.innerHTML = latest_news.querySelector("p.news-title > .news-event-title").innerHTML;
		sidebar_last_event_date.innerHTML = latest_news.querySelector("p.news-meta > .news-event-date").innerHTML;
		sidebar_last_event_title.href = news_url + "#" + latest_news.id;
	});
}