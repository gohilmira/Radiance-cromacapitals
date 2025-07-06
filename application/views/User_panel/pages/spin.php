	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
   #app {
  width: 400px;
  height: 400px;
  margin: 0 auto;
  position: relative;
}

.marker {
  position: absolute;
  width: 60px;
  left: 172px;
  top: -20px;
  z-index: 2;
}

.wheel {
  width: 100%;
  height: 100%;
}

.button {
  display: block;
  width: 250px;
  margin: 40px auto;
  cursor: pointer;
}

.button:hover {
  opacity: 0.8;
}

.blur {
  animation: blur 10s;
}

@keyframes blur {
  0% {
    filter: blur(1.5px);
  }
  80% {
    filter: blur(1.5px);
  }
  100% {
    filter: blur(0px);
  }
}
</style>
   <center>
    <br>
    <br>
    <br>
    <br>
    <br>

 <div id="app">
      <img class="marker" src="<?= base_url('images/Ad/');?>marker.png" />
      <img class="wheel" src="<?= base_url('images/Ad/');?>wheel10.png" style="height:70%;width:70%"/>
      
     <?php
      
       $u_code = $this->session->userdata('user_id');
     
              ?>
              <img class="button" src="<?= base_url('images/Ad/');?>button.png" />
              <?php
              
           
      ?>
    </div>
    <span id="spin_res"></span><br>
    <span id="wheel_status"></span>
    
   
    </center>
   
   <script  >
    // Immediately invoked function expression
// to not pollute the global scope
(function() {
  const wheel = document.querySelector('.wheel');
  const startButton = document.querySelector('.button');
  let deg = 0;
   
  startButton.addEventListener('click', () => {
      set_wheel_status('Loading...');
      deg = 0;
    // Disable button during spin
    startButton.style.pointerEvents = 'none';
    // Calculate a new rotation between 5000 and 10 000
    deg = Math.floor(5000 + Math.random() * 5000);
    // Set the transition on the wheel
    wheel.style.transition = 'all 10s ease-out';
    // Rotate the wheel
    wheel.style.transform = `rotate(${deg}deg)`;
    // Apply the blur
    wheel.classList.add('blur');
   
  });

  wheel.addEventListener('transitionend', () => {
    // Remove blur
    wheel.classList.remove('blur');
    // Enable button when spin is over
    startButton.style.pointerEvents = 'auto';
    // Need to set transition to none as we want to rotate instantly
    wheel.style.transition = 'none';
    // Calculate degree on a 360 degree basis to get the "natural" real rotation
    // Important because we want to start the next spin from that one
    // Use modulus to get the rest value from 360
    const actualDeg = deg % 360;
    // Set the real rotation instantly without animation
    wheel.style.transform = `rotate(${actualDeg}deg)`;
    const wheel_res = Math.floor(actualDeg/36)+1;
    
    $.ajax({
              type: "post",
              url: "<?= $panel_path.'spin/wheel_res';?>",
              data: {wheel_res:wheel_res},          
              success: function (response) {  
               // alert();
               var resp = JSON.parse(response);
                set_wheel_status(resp.message);
                $('#spin_res').html(resp.value).css('color','green'); 
                
                // set_spin_status(resp.total);
              /*  var res = JSON.parse(response);          
                if(res.error==true){
                  $('#'+res_area).html(res.message).css('color','red');              
                }else{
                  $('#'+res_area).html(res.message).css('color','green');              
                }*/
                startButton.style.display = 'none';
              }
            });
    
      
  });
})();
     function set_wheel_status(msg){
         $('#wheel_status').html(msg);
     } 
     
    
  </script> 
