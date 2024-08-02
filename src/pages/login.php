<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8 w-full">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img
      class="mx-auto h-10 w-auto"
      src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
      alt="Your Company"
    />
    <h2
      class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900"
    >
      Đăng nhập tài khoản
    </h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" action="index.php?act=login" method="POST">
      <div>
        <label
          for="email"
          class="block text-sm font-medium leading-6 text-gray-900"
          >Địa chỉ email</label
        >
        <div class="mt-2">
          <input
            id="email"
            name="email"
            type="email"
            autocomplete="email"
            required
            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
          />
        </div>
      </div>

      <div>
        <div class="flex items-center justify-between">
          <label
            for="password"
            class="block text-sm font-medium leading-6 text-gray-900"
            >Mật khẩu</label
          >
          <div class="text-sm">
            <a
              href="index.php?act=forgot-password"
              class="font-semibold text-indigo-600 hover:text-indigo-500"
              >Quên mật khẩu?</a
            >
          </div>
        </div>
        <div class="mt-2">
          <input
            id="password"
            name="password"
            type="password"
            autocomplete="current-password"
            required
            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
          />
        </div>
      </div>

      <div>
        <input
          type="submit"
          name="signin"
          value="Đăng nhập"
          class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
        />
      </div>
    </form>

    <p class="mt-10 text-center text-sm text-gray-500">
      Không phải thành viên
      <a
        href="index.php?act=register"
        class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500"
        >Đăng ký</a
      >
    </p>
  </div>
</div>
<?php if (isset($mess) && $mess === true) { ?>
  <script>
    alert('Đăng nhập thành công. Chúc bạn mau sắm vui vẻ');
    window.location="http://localhost:8000/index.php";
  </script>
<?php } else if(isset($mess) && $mess === false) { ?>
  <script>
    alert('Đăng nhập thất bại. Vui lòng kiểm tra lại email hoặc mật khẩu !');
  </script>
<?php } ?>