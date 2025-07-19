<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
 
  <title>layout</title>
</head>
<body class="m-0 p-0 box-border ">
  <div class="layout h-screen w-[100%] flex ">
    <div class="flex w-[16%]  bg-[#FF7900] flex-col">
      <div class="h-[200px] w-[200px]  bg-[] rounded-3xl mt-10 ml-10 flex objectif-cover ">
          <img src="/assets/images/maxit.png" alt="" class=" m-auto rounded-3xl">
      </div>
      <div class="w-[95%] h-[90%] m-auto mt-10">
        <div class="flex flex- mt-10  ml-10">
          <i class="fa-solid fa-house text-[#fff] text-3xl"></i>
          <p class="text-2xl text-[#fff] ml-6 mt-1">Accueil</p>
        </div>
        <div class="flex flex- mt-10  ml-10">
          <i class="fa-solid fa-share-from-square text-3xl text-[#fff]"></i>
          <p class="text-2xl text-[#fff] ml-6 mt-1">Transactions</p>
        </div>
        <div class="flex flex- mt-10  ml-10">
          <i class="fa-solid fa-file-invoice-dollar text-3xl text-[#fff]"></i>
          <p class="text-2xl text-[#fff] ml-6 mt-1">Comptes</p>
        </div>
        <form class="flex flex- mt-70  ml-10" action="/logout" method="POST">
          <i class="fa-solid fa-right-from-bracket text-3xl text-[#fff]"></i>
          <button type="submit" class="text-2xl text-[#fff] ml-6 mt-1 cursor-pointer">Deconnexion</button>
        </form>

      </div>

    </div>
    <div class="flex w-[84%] flex-col">
      <div class=" h-[70px] w-[100%] flex mt-5">
          <div class="w-[60%] h-15  ml-6 rounded-4xl  bg-[#F6F0F0] mt-2">
              <i class="fa-solid fa-magnifying-glass-dollar absolute mt-4 text-2xl ml-6"></i>
              <input type="text" name="" id="" class="p-4 h-[100%] ml-20  border rounded-4xl w-[100%] bg-[#F6F0F0] outline-none border-none" placeholder="recherche">
          </div>
          <div class="h-[70px] w-[70px] bg-[#F6F0F0]  rounded-[100%] ml-35 mb-2">
              <img src="/assets/images/DSC08071.jpg" alt="" class=" w-[100%] h-[100%] rounded-[100%] objectif-cover">
          </div>
          <div class="h-[50px] w-[150px]  rounded-4xl ml-20 mt-3 bg-[#FF7900] flex justity-center items-center">
              <p class="text-center text-[#fff] font-bold text-xl ml-10">Client</p>
          </div>
          <div class="h-[70px] w-[70px] ml-6">
            <i class="fa-solid fa-bell text-4xl ml-10 mt-5"></i>
          </div>
        
      </div>
      <div class="h-full w-full">
          <?php echo $content ;?>
      </div>  
      

    </div>

  </div>
</body>
</html>


