<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>eUNLOCK FILE UPLOAD</title>
  <style>
.custom-upload {
    background-color: #2c3e50;
    border: 8px solid #2c3e50;
    border-radius: 4px;
    cursor: pointer;
    color: #fff;
    padding: 4px 10px;
}
.custom-upload input {
    left: -9999px; 
    position: absolute;
}


body {
  display: flex;
  flex-direction: column;
  justify-content: none;
  align-items: none;
  height: 100vh;
  background:  #1a73e8;
}
h1 {
  margin: 0 0 0.25em;
}
 
select {
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  appearance: none;
  outline: 0;
  box-shadow: none;
  border: 0 !important;
  background: #2c3e50;
  background-image: none;
}
 
select::-ms-expand {
  display: none;
}

.select {
  position: relative;
  display: flex;
  width: 20em;
  height: 3em;
  line-height: 3;
  background: #2c3e50;
  overflow: hidden;
  border-radius: .25em;
}
select {
  flex: 1;
  padding: 0 .5em;
  color: #fff;
  cursor: pointer;
}
/* Arrow */
.select::after {
  content: '\25BC';
  position: absolute;
  top: 0;
  right: 0;
  padding: 0 1em;
  background: #34495e;
  cursor: pointer;
  pointer-events: none;
  -webkit-transition: .25s all ease;
  -o-transition: .25s all ease;
  transition: .25s all ease;
}
 
.select:hover::after {
  color: #1a73e8;
}

</style>
  <script  src="./script.js"></script>
</head>
<body> 
 
<br>
 <center>

<table class="tg">
  <tr>
    <th class="tg-0pky"> <div class="select">
<select id="folder" name="folder" >
<option value="test">test</option>
<option value="test1">test1</option>
<option value="test2">test2</option>
<option value="OTHER">OTHER</option>

</select>
 </div> </th>

 <th class="tg-0pky"> <label class="custom-upload"> <progress id="progressBar" value="0" max="100" style="width:300px;"> </label> </progress></th>
    <th class="tg-0pky"> <label class="custom-upload">
  <input type="file" name="file1" id="file1" onchange="uploadFile()"> 
...BROWES</label>  </th>

   
  </tr>
 
</table>
  <h3 id="status">  </h3> 
  <p  hidden="" id="loaded_n_total"></p>

 <center>
</form>
 
</body>
</html>
