function maps(p) {
  LeftPosition = screen.width ? (screen.width - 700) / 2 : 0;
  TopPosition = screen.height ? (screen.height - 700) / 2 : 0;
  settings =
    "height=700" +
    ",width=700" +
    ",top=" +
    TopPosition +
    ",left=" +
    LeftPosition +
    ",resizable";
  if (p == 1) {
    window.open("https://goo.gl/maps/J1rcxSvBFMZiFvgXA", "Chennai", settings);
  } else if (p == 2) {
    window.open("https://goo.gl/maps/oH918wBJ6X1jdYGQ6", "Mumbai", settings);
  } else if (p == 3) {
    window.open("https://goo.gl/maps/wdEv67Roy6kS3LBW8", "Delhi", settings);
  }
}