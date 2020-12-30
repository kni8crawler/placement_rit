
<html>
<head>
	<title>H.T.M.S</title>
	<link rel="stylesheet" type="text/css" href="traffic.css">
	
</head>
<body onload="read1()">


	 <div style="text-align: center;">
		<h1 style="color: white;width: 700px;text-align: center;">HYBRID TRAFFIC MANAGEMENT</h1>
	</div> 

<div id="right">
<h1 style="color: black; width: 400px;text-align: right" ><b>Assign the Traffic Status</b></h1>
<a href="#" class="button1">RED</a>
<!--<button type="button" onclick="myFunction()"></button>-->
<a href="#" class="button2">YELLOW</a>
<a href="#" class="button3">GREEN</a>
</div>
</div>
</div>


	<div style="text-align: left;color: black"><h1>PLACE-1</h1></div>
	<br>
	<br>
	<br>
	<br>
<div class="trafficlight">
  <div class="protector"></div>
  <div class="protector"></div>
  <div class="protector"></div>
  <div class="red" id="red"></div>
  <div class="yellow" id="yellow"></div>
  <div class="green" id="green"></div>
</div>


<!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
  <script src="https://www.gstatic.com/firebasejs/6.6.0/firebase-app.js"></script>

  <!-- Add Firebase products that you want to use -->
  <script src="https://www.gstatic.com/firebasejs/6.6.0/firebase-auth.js"></script>
  <script src="https://www.gstatic.com/firebasejs/6.6.0/firebase-firestore.js"></script>
  <script src="https://www.gstatic.com/firebasejs/6.6.0/firebase-database.js"></script>
  <script type="text/javascript">
  var config = {
  apiKey: "AIzaSyB8CBuJf3-EzMbik7VXVc2DutKDgcW5XHQ",
  authDomain: "trafficsignals-88ff2.firebaseapp.com",
  databaseURL: "https://trafficsignals-88ff2.firebaseio.com",
  projectId: "trafficsignals-88ff2",
  storageBucket: "trafficsignals-88ff2.appspot.com",
};
firebase.initializeApp(config);

  // Get a reference to the database service
  var database = firebase.database();
  function writeUserData() {
  firebase.database().ref('traffic/').set({
    density: "high",
    status: "r"
  });
}

function read1(){
	var database = firebase.database().child('density');
 var leadsRef = database.ref('traffic');
  leadsRef.on('value', function(snapshot) {
      // snapshot.forEach(function(childSnapshot) {
        var childData = snapshot.node_.children_.root_.value.value_;
        console.log(childData);
        if (childData=="mild") {
        	document.getElementById("red").setAttribute('style',"background:red;animation: 45s red infinite;");
        	document.getElementById("yellow").setAttribute('style',"background:red;animation: 3s yellow infinite;");
        	document.getElementById("green").setAttribute('style',"background:red;animation: 25s green infinite;");
        }
        else if (childData=="high") {
          var myVar = setInterval(red, 40000);
          function red(){
        	document.getElementById("red").style.background=red;
          clearInterval(myVar);
          var myVar1 = setInterval(yellow, 3000);
          }
          function yellow(){
          document.getElementById("yellow").setAttribute('style',"background:yellow;");
          clearInterval(myVar1);
          var myVar2 = setInterval(yellow, 30000);
          }
          function green(){
          document.getElementById("green").setAttribute('style',"background:green;");
          clearInterval(myVar2);
          var myVar = setInterval(red, 40000);
          }
        }
        else {
        	document.getElementById("red").setAttribute('style',"background:red;animation: 35s red infinite;");
        	document.getElementById("yellow").setAttribute('style',"background:red;animation: 3s yellow infinite;");
        	document.getElementById("green").setAttribute('style',"background:red;animation: 35s green infinite;");
        }
      // });
  });
}


</script>
</body>
</html>




