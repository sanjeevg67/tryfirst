<!DOCTYPE html>
<html>
<head>
// Add the angular and the css
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
//link the css
<link rel="stylesheet" href="/w3css/4/w3.css">
</head>

<body ng-app="studentApp">
  <div id="header" class="w3-container w3-teal">
    //Divide it into 2 columns
    <h3> Maintain Student Info </h3>
  </div>
  <div id="workarea">
    // Again divide into 2 areas. A sidebar and a form
    <div id="sidebar">
      <h6> Add Student </h6>
      <h6> List Students </h6>
    </div>
    <div>
      <form class="form">
        Admission# : <input type="text">
        Name       : <input type="text">
        Class      : <input type="text">
        Board      : <input type="text">
      </form>

    </div>
  </div>
  <div id="footer">
    <h5> This is a test Angular project </h5>
  </div>
</body>
</html>
