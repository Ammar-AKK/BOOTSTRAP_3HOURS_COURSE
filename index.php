<?php
include './inc/conn.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';



?>

<?php include_once './parts/header.php'; ?>




    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <img src= "images/Education.png" alt="ERROR">
            <h1 class="display-4 fw-normal">ادخل لفرصة ربح منحة دراسية مدفوعة التكاليف! </h1>
            <p class="lead fw-normal">باقي على السحب: </p>
            <!-- Display the countdown timer in an element -->
            <h3 id="countdown"></h3>
            <a class="btn btn-outline-secondary" href="#">السحب قريبًا</a>
        </div>
    </div>

<!--
    <ul class="list-group list-group-flush">
        <li class="list-group-item">تابعنا على تويتر " X " </li>
        <li class="list-group-item">البث حيكون على التويتش</li>
        <li class="list-group-item">راح يكون فيه 5 فائزين</li>
        <li class="list-group-item">اول 3 مراكز بيفوزوا بمنحة مدفوعة</li>
        <li class="list-group-item">المراكز 4 و 5 بيفوزوا ب 10000 ريال</li>
    </ul>
-->
    
    
<div class="position-relative text-center">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
    <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
        <h3> الرجاد ادخال معلوماتك هنا:</h3>
        <div class="mb-3">
            <label for="firstName" class="form-label">الاسم الأول</label>
            <input type="text" name="firstName" class="form-control" id="firstName" value="<?php echo $firstName ?>">
            <div  class="form-text error"><?php echo $errors['firstNameError'] ?> </div>
        </div>

        <div class="mb-3">
            <label for="lastName" class="form-label">الاسم الأخير</label>
            <input type="text" name="lastName" class="form-control" id="lastName" value="<?php echo $lastName ?>">
            <div  class="form-text error"><?php echo $errors['lastNameError'] ?></div>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">البريد الإلكتروني</label>
            <input type="text" name="email" class="form-control" id="email" value="<?php echo $email ?>">
            <div  class="form-text error"><?php echo $errors['emailError'] ?></div>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">إرسال المعلومات</button>

    </form>

    </div>
    </div>



    <!--    <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>


        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>


    </div>
-->

    <!--
    <form action="index.php" method="POST">
        <input type="text" name="firstName" id="firstName" placeholder="First Name">
        <input type="text" name="lastName" id="lastName" placeholder="Last Name">
        <input type="text" name="email" id="email" placeholder="E-mail">
        <input type="submit" name="submit" value="send">
    </form>
-->


<!--

<div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>
-->

<!-- Button trigger modal -->
<div class= "d-grid gap-2 col-12 mx-auto my-5">
<button type="button"  id= "winner" class="btn btn-primary" >
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
      <?php foreach ($users as $user) : ?>
        <h5 class="display-1 text-center modal-title" id="modalLabel"><?php echo htmlspecialchars($user['firstName'])  . ' ' . htmlspecialchars($user['lastName'])?></h5>
        <?php endforeach; ?>
    </div>
  
    </div>
  </div>
</div>








<div id="cards" class="row mb-5 pb-5">
    

    <div class=col-sm-6>
<div class ="card my-2 bg-light">
 <div class= "card-body"> 
       <h5 class= "card-title"></h5>
       <p class="card-text"><?php echo htmlspecialchars($user['email']); ?> </p>
</div>
</div>
</div>

</div>



<?php include_once './parts/footer.php'; ?>





<!--

<?php foreach ($users as $user) : ?>
        <h1><?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName']) . '<br>' . htmlspecialchars($user['email']); ?> </h1>
    <?php endforeach; ?>



<?php include_once './parts/footer.php'; ?>


-->