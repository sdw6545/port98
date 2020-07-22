<header class="blog-header py-3">
	<div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
            <a class="text-muted" href="../main/index.html">WEB'S</a>
        </div>
        <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="../main/index.html">PHP Reference</a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">

        <?php if(!isset($_SESSION['memberID'])){ ?>
        	<a class="btn btn-sm btn-outline-secondary mr-2" href="../sign/signUpForm.php">회원가입</a>
        	<a class="btn btn-sm btn-outline-secondary" href="../sign/signInForm.php">로그인</a>
        <?php } else { ?>
        	<a class="btn btn-sm btn-outline-secondary mr-2" href="#"><?=$_SESSION['nickname']?>님 로그인 되었습니다.</a>
        	<a class="btn btn-sm btn-outline-secondary" href="../sign/signOut.php">로그아웃</a>
        <?php } ?>   
        </div>
    </div>
</header>