<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Chat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

  
  <link rel='stylesheet prefetch' href='http://cdn.materialdesignicons.com/1.1.70/css/materialdesignicons.min.css'>
<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:300'>

      <link rel="stylesheet" href="../css/style.css">

  
</head>

<body>
   <style id="dynamic-styles"></style>
<div id="hangout">  
  <div id="head" class="style-bg"> <i class="mdi mdi-arrow-left"></i> <i class="mdi mdi-fullscreen-exit"></i> <i class="mdi mdi-menu"></i> 
    <h1><?php echo $_SESSION["username"]; ?></h1><i class="mdi mdi-chevron-down"></i></div>  
  <div id="content">
    <div id="floater-position">          
      <div id="chat-floater" class="floater control style-bg hidden"><i class="mdi mdi-plus"></i></div>   
    </div>
    <div class="card menu">
      <div class="header">
      <img src="../images/index.png" />
        <h3></h3>
      </div>
      <div class="content">
      <div class="overlay"></div>  
        <div class="i-group">
    <input type="text" id="username"><span class="bar"></span>
    <label>Name</label>
        </div>        
        <br />
        <div class="center"><canvas id="colorpick" width="250" height="220" ></canvas></div>                        
      </div>
    </div> 

    <div class="list-text">
    <ul class="list mat-ripple">      
      <li><img src="../images/index.png">
        <div class="content-container">
          <span class="name">Angie</span>
        </div>
        <span class="time">14:00</span>
         </li> 
    </ul> 
    </div>

    <div class="list-chat">
      <ul class="chat">
        <li>
        <img src="../images/index.png">
          <div class="message">o hai!</div>
        </li>
        <li>
        <img src="http://lorempixel.com/100/100/people/1/">
          <div class="message"></div>
        </li>
        <li>
        <img src="http://s8.postimg.org/76bg2es2t/index.png">
          <div class="message current">...</div>
        </li>
      </ul>
      <div class="meta-bar chat"><input class="nostyle chat-input" type="text" placeholder="Message..." /> <i class="mdi mdi-send"></i></div>
    </div>

    </div>  
</div>
  <div id="contact-modal" data-mode="add" class="card dialog">
    <h3>Add Contact</h3>
      <div class="i-group">
      <input type="text" id="new-user"><span class="bar"></span>
      <label>Name</label>
      </div>
    
    <div class="btn-container">
      <span class="btn cancel">Cancel</span>
      <span class="btn save">Save</span>      
    </div>
    
    </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="../js/index.js"></script>

</body>
</html>
