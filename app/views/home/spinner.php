
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>res/assets/style.css" />
    <title>Lucky Draw</title>
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
</head>
<body>
    <!-- <div id="jquery-script-menu"> -->
<!-- <div class="jquery-script-center">
<ul>
<li><a href="https://www.jqueryscript.net/other/lucky-spin-random-wheel.html">Download This Plugin</a></li>
<li><a href="https://www.jqueryscript.net/">Back To jQueryScript.Net</a></li>
</ul>
<div id="carbon-block"></div>
</div> -->
<!-- <div class="jquery-script-clear"></div> -->
<!-- </div> -->
<!-- </div> -->
<div class="mainbox" id="mainbox">
    <div class="box" id="box">
        <div class="box1">
            <?php $cid = 1; for($i=0;$i<5; $i++){?>
                <span class="font span<?=$cid;?>"><b></b></span>
            <?php $cid++; } ?>
        </div>
        <div class="box2">
            <?php $cid = 1; for($i=5;$i<10; $i++){?>
                <span class="font span<?=$cid;?>"><b></b></span>
            <?php $cid++; } ?>
            >
        </div>
    </div>
    <button class="spin" id="spinBtn" onclick="spin()">SPIN</button>
</div>

<audio controls="controls" id="applause" src="<?php echo base_url() ?>res/assets/applause.mp3" type="audio/mp3"></audio>
<audio controls="controls" id="error" src="<?php echo base_url() ?>res/assets/error.mp3" type="audio/mp3"></audio>
<audio controls="controls" id="warning" src="<?php echo base_url() ?>res/assets/warning.mp3" type="audio/mp3"></audio>

<audio controls="controls"id="wheel" src="<?php echo base_url() ?>res/assets/wheel.mp3" type="audio/mp3" ></audio>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="<?php echo base_url() ?>res/assets/script.js"></script>
<script type="text/javascript">
    function shuffle(array) {
  var currentIndex = array.length,
    randomIndex;

  // While there remain elements to shuffle...
  while (0 !== currentIndex) {
    // Pick a remaining element...
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex--;

    // And swap it with the current element.
    [array[currentIndex], array[randomIndex]] = [
      array[randomIndex],
      array[currentIndex],
    ];
  }

  return array;
}

function spin() {
    $("#spinBtn").hide();
    $.ajax({
        url: '<?php echo base_url(); ?>home/getSpins/<?=$this->session->userdata("user_id");?>/<?= $did; ?>',
        type: 'POST',
        dataType: 'json',
        success: function(data) {
            if(data.spins > 2){
                error.play(); 
                swal(
                  "Failed",
                  "You have depleted your spins!",
                  "error"
                );
            }else{
                
                var indexes = shuffle([0,1,2,3,4,5,6,7,8,9]);
                
                var ids = shuffle(JSON.parse('<?php echo json_encode($draw["ids"]);?>'));
                
                var rotations = shuffle([1890, 2250, 2610, 1850, 2210, 2570,1810, 2170, 2530,1770, 2130, 2490,1750, 2110, 2470,1630, 1990, 2350,1570, 1930, 2290]);
                
                $.ajax({
                    url: '<?php echo base_url(); ?>home/setSpins/<?=$this->session->userdata("user_id");?>/<?= $did; ?>/'+ids[indexes[0]],
                    type: 'POST',
                    dataType: 'json',
                    success: function(data) {
                        
                      wheel.play();
                  
                      const box = document.getElementById("box");
                      const element = document.getElementById("mainbox");
                      
                      // Proses
                      box.style.setProperty("transition", "all ease 5s");
                      box.style.transform = "rotate(" + rotations[0] + "deg)";
                      element.classList.remove("animate");
                      setTimeout(function () {
                        element.classList.add("animate");
                        if(data.status == 0){
                            warning.play(); 
                            swal(
                              "Warning",
                               data.msg,
                              "warning"
                            );
                          }else if(data.status == 2){
                            error.play();  
                            swal(
                              "Error",
                               data.msg,
                              "error"
                            );
                          }else if(data.status == 1){
                             applause.play(); 
                             swal(
                              "Warning",
                               data.msg,
                              "success"
                            );
                          }
                          
                        box.style.setProperty("transition", "initial");
                        box.style.transform = "rotate(90deg)";
                        $("#spinBtn").show();
                      }, 5000);
                    
                      
                      
                        
                    }
                });
                
                
                
            }
        }
    });
    
    


}


</script>
<script>
    
</script>
</body>
</html>
