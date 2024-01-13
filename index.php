<?php
include './inc/db.php';
include './inc/form.php';    
include './inc/db_close.php';
include './inc/select.php';


mysqli_free_result($result);
mysqli_close($conn);

?>

<?php include_once './parts/header.php'; ?> 




<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <img src="images/download.jpg" alt="">
    <h1 class="display-4 fw-normal">اربح مع راكان</h1>
    <p class="lead fw-normal">باقي على فتح التسجيل</p>
    <h3 id="#countdown"></h3>
    <d class="lead fw-normal">  للسحب على ايفون 15 </b>
    <br>
    
    </div>
    <h3>للدخول للسحب يرجى اتباع ما يلي:</h3>
    <ul class="list-group list-group-flush">
  <li class="list-group-item">تابع البث المباشر في اليوتيوب خلال بداية السنه</li>
  <li class="list-group-item">متابعتي على الانستقرام</li>
  <li class="list-group-item">الانتساب في القناة</li>
  <li class="list-group-item">اعجاب على اخر صورة في الانستقرام</li>
  <li class="list-group-item">في نهاية البث سيتم اختيار الرابح</li>
</ul>
  </div>


  

<div class="container">

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center ">
    <div class="col-md-5 p-lg-5 mx-auto my-5">

    

<form class="mt-5" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
    <h3>الرجاء ادخال المعلومات</h3>
  <div class="mb-3">
    <label for="firstName" class="form-label">الاسم الاول</label>
    <input type="text" name="firstName" class="form-control" id="firstName" value="<?php echo $firstName ?>">
    <div  class="form-text Error"><?php echo $errors['firstNameError'] ?></div>
  </div>

  <div class="mb-3">
    <label for="lastName" class="form-label">الاسم الاخير</label>
    <input type="text" name="lastName" class="form-control" id="lastName" value="<?php echo $lastName ?>">
    <div  class="form-text Error"><?php echo $errors['lastNameError'] ?></div>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">البريد الاكتروني</label>
    <input type="text" name="email" class="form-control" id="email" value="<?php echo $email ?>">
    <div  class="form-text Error"><?php echo $errors['emailError'] ?></div>
  </div>
  

  <button type="submit" name="submit" class="btn btn-primary">ارسال المعلومات</button>
</form>

</div>
  </div>





<div class="loader-con">
  <div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>
</div>



<!-- Button trigger modal -->
<div class="d-grid gap-2 col-10 mx-auto my-5">
<button type="button" id="winner" class="btn btn-primary" >
  اختيار الرابح
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">


  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
      
        <h5 class="modal-title" id="modalLabel">الرابح في المسابقة</h5>
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach($users as $user) : ?>
        <h1 class="display-3 text-center modal-title" id="modallable"><?php echo htmlspecialchars($user['firstName']) . ' ' .htmlspecialchars($user['lastName']). '<br>' ; ?></h1> 
        <?php endforeach; ?>
      </div>
      
    </div>
  </div>
</div>




<canvas id="confetti" class="canvas"></canvas>


<?php include_once './parts/footer.php'; ?> 