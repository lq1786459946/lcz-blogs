<?php if(!defined( '__TYPECHO_ROOT_DIR__'))exit;?>


     <script>
     var loadimg = "<?= Func::loadimg();?>";
$(document).pjax('a[href^="<?php Helper::options()->siteUrl()?>"]:not(a[target="_blank"], a[no-pjax])', {  
    container: '.main',  
    fragment: '.main',  
    timeout: 8000  
}).on('pjax:send', function() {  
    NProgress.start();//加载动画效果开始  
}).on('pjax:complete', function() {  
    tabgl();  
    NProgress.done();//加载动画效果结束  
    dx();  
    lazyload();  
    next();  
    aaa();  
    video();
});
</script>

<div class="tc">
    <div class="tc-main">
    
</div>
<div onclick="shareclose()" class="tc-close"><svg t="1700047644371" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="950" width="20PX" height="20PX"><path d="M610.616405 512.423878l391.647127 391.939565a68.722849 68.722849 0 0 1 0 98.332161 72.012772 72.012772 0 0 1-100.306115 0l-390.404267-391.354689-392.012675 391.28158a69.74638 69.74638 0 0 1-98.551489-98.551489l391.793346-391.720237L20.988986 119.533891A69.74638 69.74638 0 0 1 119.540475 20.982402l392.158893 392.451331L901.957417 23.248793a72.012772 72.012772 0 0 1 100.306115 0 68.722849 68.722849 0 0 1 0 98.332161L610.616405 512.423878z" p-id="951"></path></svg></div>
</div>








 <div class="footbar">
<div onclick="window.location.href='<?php $this->options ->siteUrl(); ?>'" class="footbar-div">
<svg t="1694485719911" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="4276" width="30px" height="30px"><path d="M886.348599 492.812394L549.460459 176.659771A22.27148 22.27148 0 0 0 532.052865 170.771909a22.57014 22.57014 0 0 0-17.364928 5.845197L177.799798 492.812394a22.612806 22.612806 0 0 0 30.932612 32.937898l7.125167-6.655844v274.425597c0 55.465372 45.268277 100.605653 100.904312 100.605652h430.667284a100.861647 100.861647 0 0 0 100.904313-100.605652V735.153406a22.612806 22.612806 0 0 0-45.182946 0v58.366639c0 30.591286-25.044749 55.465372-55.721367 55.465372H316.761889c-30.719283 0-55.721367-24.874086-55.721367-55.465372V476.684771L532.095531 222.312039l271.055009 254.372732v123.00513a22.57014 22.57014 0 1 0 45.182946 0v-80.638119l7.082501 6.69851a22.57014 22.57014 0 1 0 30.932612-32.937898" fill="#3D405D" p-id="4277"></path></svg> </div>
       <div onclick="window.location.href='<?php $this->options ->siteUrl(); ?>about.html'" class="footbar-div"><svg t="1694485769693" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="3861" width="30px" height="30px"><path d="M807.680427 490.666667H509.611093V211.968C662.400427 221.610667 787.968427 338.986667 807.680427 490.666667zM469.33376 509.013333c0 0.341333 0.170667 0.597333 0.213333 0.938667 0 0.298667-0.213333 0.554667-0.213333 0.853333 0 11.093333 9.045333 20.181333 20.181333 20.181334h336a19.413333 19.413333 0 0 0 10.581334-3.456 19.84 19.84 0 0 0 14.08-20.138667C837.248427 318.592 678.86976 170.666667 489.472427 170.666667A20.138667 20.138667 0 0 0 469.33376 190.933333v318.122667z" fill="#3C405D" p-id="3862"></path><path d="M829.056427 572.544a19.925333 19.925333 0 0 0-23.381334 16.298667A320.597333 320.597333 0 0 1 489.515093 853.333333c-177.152 0-321.237333-144.085333-321.237333-321.152a319.573333 319.573333 0 0 1 226.730667-307.114666 20.053333 20.053333 0 0 0 13.312-25.173334 20.010667 20.010667 0 0 0-25.173334-13.312 359.637333 359.637333 0 0 0-255.146666 345.6c0 199.338667 162.176 361.472 361.472 361.472a360.917333 360.917333 0 0 0 355.882666-297.728 20.181333 20.181333 0 0 0-16.298666-23.381333" fill="#3C405D" p-id="3863"></path></svg></div>
 <div onclick="window.location.href='<?php $this->options ->siteUrl(); ?>friends.html'" class="footbar-div"><svg t="1694485826141" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="4000" width="30px" height="30px"><path d="M668.376747 436.138667a21.333333 21.333333 0 0 0 29.866666 4.650666l145.066667-105.728a21.333333 21.333333 0 0 0-25.130667-34.56L756.995413 345.173333c-55.210667-81.493333-148.053333-131.84-246.912-131.84a298.666667 298.666667 0 0 0-246.442666 130.261334L204.632747 300.544a21.376 21.376 0 0 0-25.130667 34.517333l62.72 45.653334A296.192 296.192 0 0 0 211.416747 512c0 157.866667 123.306667 287.274667 278.656 297.685333v69.888a21.333333 21.333333 0 1 0 42.666666 0v-70.058666c152.192-11.605333 274.005333-138.752 275.968-293.717334a21.376 21.376 0 0 0-21.077333-21.589333h-0.256a21.333333 21.333333 0 0 0-21.333333 21.077333c-1.664 131.712-104.362667 240.085333-233.301334 251.562667v-66.816a21.333333 21.333333 0 1 0-42.666666 0v66.986667c-131.84-10.282667-235.946667-120.576-235.946667-255.018667 0-37.717333 8.362667-73.472 23.082667-105.728l47.402666 34.517333a21.461333 21.461333 0 0 0 29.824-4.650666 21.376 21.376 0 0 0-4.693333-29.866667l-51.626667-37.632A256 256 0 0 1 510.040747 256c86.613333 0 164.864 42.666667 212.565333 114.176l-49.578667 36.138667a21.333333 21.333333 0 0 0-4.693333 29.824" fill="#3C405D" p-id="4001"></path></svg></div>
                <div onclick="window.scroll({top: 0, left: 0, behavior: 'smooth'});"  class="footbar-div"><svg t="1694485850542" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="4138" width="45px" height="45px"><path d="M676.441173 625.792L526.169173 475.562667a21.418667 21.418667 0 0 0-30.208 0L347.566507 624a21.418667 21.418667 0 0 0 15.061333 36.437333 21.418667 21.418667 0 0 0 15.146667-6.229333l133.333333-133.376 135.125333 135.125333a21.248 21.248 0 0 0 30.208 0 21.333333 21.333333 0 0 0 0-30.165333" fill="#3C405D" p-id="4139"></path></svg></div>
    </div>

   