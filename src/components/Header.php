<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <link rel="stylesheet" href="../../public/css/styles.css">
</head>
<body class="bg-[#efefef]">
  <header class="bg-white">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
      <!-- logo -->
      <div class="flex lg:flex-1">
        <a href="#" class="-m-1.5 p-1.5">
          <span class="sr-only">XShop</span>
          <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
        </a>
      </div>

      <!-- icon close menu header -->
      <div class="flex lg:hidden">
        <button type="button" class="btnMenuRespon -m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
          <span class="sr-only">Open main menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>

      <!-- menu header on destop -->
      <div class="hidden lg:flex lg:gap-x-12">
        <a href="index.php" class="text-sm font-semibold leading-6 text-gray-900">Trang chủ</a>
        <a href="index.php?act=introduce" class="text-sm font-semibold leading-6 text-gray-900">Giới thiệu</a>
        <a href="index.php?act=contact" class="text-sm font-semibold leading-6 text-gray-900">Liên hệ</a>
        <a href="index.php?act=feedback" class="text-sm font-semibold leading-6 text-gray-900">Góp ý</a>
        <a href="index.php?act=question" class="text-sm font-semibold leading-6 text-gray-900">Hỏi đáp</a>
      </div>

      <!-- login button -->
      <div class="hidden lg:flex lg:flex-1 lg:justify-end">
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Log in <span aria-hidden="true">&rarr;</span></a>
        <!-- cart header -->
        <a href="#" class="hidden group -m-2">
          <div class=" flex items-center p-2">
            <svg class="h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"></path>
            </svg>
            <span class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800">0</span>
            <span class="sr-only">items in cart, view bag</span>
          </div>
        </a>
      </div>
    </nav>
  </header>

  <main class="container mx-auto">
    <div class="flex gap-5 py-6">