<html>
  <body>
  <?php
  echo '<li>
        <h3>Rick Sanchez</h3>
        <img src="https://vignette.wikia.nocookie.net/rickandmorty/images/a/a6/Rick_Sanchez.png/revision/latest?cb=20160923150728">
        </li>';
  echo '<li>
        <h3> Morty Sanchez</h3>
        <img src="https://vignette.wikia.nocookie.net/rickandmorty/images/4/41/Morty_Smith.jpg/revision/latest?cb=20170217193441">
        </li>';
  echo '<li>
        <h3> Beth Sanchez </h3>
        <img src="https://vignette.wikia.nocookie.net/ricksanchez/images/f/f6/Jerry_Smith.jpg/revision/latest?cb=20160609043244">
        </li>';
  echo '<li>
        <h3> Jerry Smith </h3>
        <img src="https://vignette.wikia.nocookie.net/rickandmorty/images/5/58/Beth_Smith.png/revision/latest?cb=20151204220729">
        </li>';
  echo '<li>
        <h3> Summer Sanchez </h3>
        <img src="https://vignette.wikia.nocookie.net/rickandmorty/images/a/ad/Summer_is_cool.jpeg/revision/latest?cb=20160919183158">
        </li>';
  ?>
  </body>
</html>
<style scoped type="text/css">
li {
  list-style-type: none;
  padding: 10px;
}
h3 {
  text-decoration: underline;
  color: black;
  text-shadow: 1pt 1pt 1pt purple;
  z-index: 10;
  font-size: 20pt;
}
img {
  height: 300px;
  width: 300px;
  box-shadow: 1pt 5pt 5pt;
}
img:hover {
  transform: scale(1.2);
  transition: 500ms;
}
body {
  background-image: url('http://wallpapershdnow.com/images/tv-shows/animation/rick-and-morty/rick-and-morty-background-47.jpg');
  background-repeat: no-repeat;
  background-position: center;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;

}
</style>