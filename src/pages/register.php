<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8 w-full">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
    <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Đăng ký thành viên</h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" action="index.php?act=register" method="POST">
      <div>
        <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Tên đăng nhập</label>
        <div class="mt-2">
          <input id="username" name="username" type="text" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>

      <div>
        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Địa chỉ email</label>
        <div class="mt-2">
          <input id="email" name="email" type="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>

      <div>
        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Mật khẩu</label>
        <div class="mt-2">
          <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>

      <div>
        <input type="submit" name="register" value="Đăng ký" class="cursor-pointer flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" />
      </div>
    </form>

    <p class="mt-10 text-center text-sm text-gray-500">
      Bạn đã có tài khoản?
      <a href="index.php?act=login" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Đăng nhập</a>
    </p>
  </div>
</div>


  <?php if (isset($mess) && $mess !== '') { ?>
    <script>
      alert('<?= $mess ?>');
      window.location="http://localhost:8000/index.php?act=login";
    </script>
  <?php } ?>

