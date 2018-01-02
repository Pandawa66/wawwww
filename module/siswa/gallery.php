<!DOCTYPE html>
<html>
<head>
<style>
* {
    box-sizing: border-box;
}

body {
    background-color: #f1f1f1;
    padding: 20px;
    font-family: Arial;
}

/* Center website */
.main {
    max-width: 1000px;
    margin: auto;
}

h1 {
    font-size: 50px;
    word-break: break-all;
}

.row {
    margin: 8px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
    padding: 8px;
}

/* Create four equal columns that floats next to each other */
.column {
    float: left;
    width: 25%;
}

/* Clear floats after rows */ 
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Content */
.content {
    background-color: white;
    padding: 10px;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media (max-width: 900px) {
    .column {
        width: 50%;
    }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
    .column {
        width: 100%;
    }
}
</style>
</head>
<body>

<!-- MAIN (Center website) -->
<div class="main">

<h1>Gallery SMPN UNGGULAN</h1>
<hr>

<h2>PORTFOLIO</h2>
<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column">
    <div class="content">
      <img src="image/PRESTASI.jpg" alt="Mountains" style="width:100%">
      <h3>Juara Nasional</h3>
      <p>Kepala SMPN Unggulan Sindang, Dra Hj Sri Sunarti MPd (ketiga dari kanan) bersama siswi-siswi peraih prestasi nasional.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="image/basket.jpg" alt="Lights" style="width:100%">
      <h3>My Works</h3>
      <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="image/gor.jpg" alt="Nature" style="width:100%">
      <h3>My Work</h3>
      <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="image/PRESTASI2.jpg" alt="Mountains" style="width:100%">
      <h3>My Work</h3>
      <p>Selamat atas diraihnya Prestasi Pramuka Smp Negeri Unggulan Sindang (Paspralansi) dalam rangka memperingati HUT Pramuka</p>
    </div>
  </div>
<!-- END GRID -->
</div>

<div class="content">
  <img src="/w3images/p3.jpg" alt="Bear" style="width:100%">
  <h3>Some Other Work</h3>
  <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
  <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
</div>

<!-- END MAIN -->
</div>

</body>
</html>
