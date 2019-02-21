workflow "Update website on push" {
  on = "push"
  resolves = ["Update website"]
}

action "Update website" {
  uses = "swinton/httpie.action@02571a073b9aaf33930a18e697278d589a8051c1"
  runs = "https://3d.bk.tudelft.nl/update"
}
