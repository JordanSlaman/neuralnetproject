<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>S.E.A.N.N.</title>
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link rel="stylesheet" href="css/jquery.signaturepad.css">
  <link href="css/seann.css" rel="stylesheet" media="screen">
</head>

<body>

  <div class="container-fluid">
    <center>
      <h1>S.E.A.N.N.</h1>
      <div class="form">
        <form method="post" action="result.php" class="sigPad">
          <canvas class="pad img-polaroid" width="100" height="150"></canvas>
          <input type="hidden" name="output" class="output">        
          <div class="btn-group">
            <button class="btn clearButton" href="#clear"><i class="icon-remove"></i> Clear</button>
            <button type="submit" class="btn btn-primary"><i class="icon-ok icon-white"></i> Submit</button>
          </div>
        </form>
      </div>
    </center>

    <div class="well">
      <p>
        An artificial neural network is a set of nodes with connections between them that each have a "weight", or cost to traverse the connection. To train the neural net, you give it some kind of input (like a drawing of a number), and if it gives the correct output (if it correctly identifies the number), you reward all the connection-paths that brought it to that output (you reduce the cost of traversing those connections later). If the neural network gives an incorrect output, you punish all the connection-paths leading to that output (increase the cost of going along that path). After doing this many times, the neural network will have sets of low-cost paths that make it more likely to reach correct outputs.
      </p>
      <p>
        To train the neural net, draw a number in the training field, tell it what number it is, and press train.
      </p>
      <p>
        To ask the neural net to identify a number, draw a number in the test     field, and press identify.
      </p>
      <p>Have fun!</p>
    </div>
    
  </div>

  <!--[if lt IE 9]><script src="../js/flashcanvas.js"></script><![endif]-->
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="js/jquery.signaturepad.min.js"></script>
  <script>
    //Configures how the pen looks
    $(document).ready(function() {
      var options = {
        penColour : '#000',
        penCap : 'round',
        lineColour : '#FFF',
        lineTop : 200,
        lineWidth : 0,
        penWidth : 10,
        drawOnly : true
      };
      $('.sigPad').signaturePad(options);
    });
  </script>
</body>
