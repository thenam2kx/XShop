<?php
  extract($inforUser)
?>
<section class="py-10 bg-gray-100  bg-opacity-50 h-screen w-full">
  <div class="mx-auto container max-w-2xl md:w-3/4 shadow-md">
    <div class="bg-gray-100 p-4 border-t-2 bg-opacity-5 border-indigo-400 rounded-t">
      <div class="max-w-sm mx-auto md:w-full md:mx-0">
        <div class="inline-flex items-center space-x-4">
          <img class="w-10 h-10 object-cover rounded-full" alt="User avatar" src="../../public//images/users/<?= $avatar ?>" />

          <h1 class="text-gray-600"><?= $fullname ?></h1>
        </div>
      </div>
    </div>
    <div class="bg-white space-y-6">
      <form action="index.php?act=update-account" method="post">
        <div class="md:inline-flex space-y-4 md:space-y-0 w-full p-4 text-gray-500 items-center">
          <h2 class="md:w-1/3 max-w-sm mx-auto">Account</h2>
          <div class="md:w-2/3 max-w-sm mx-auto">
            <label class="text-sm text-gray-400">Email</label>
            <div class="w-full inline-flex border">
              <div class="pt-2 w-1/12 bg-gray-100 bg-opacity-50">
                <svg fill="none" class="w-6 text-gray-400 mx-auto" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
              </div>
              <input type="email" value="<?= $email ?>" class="w-11/12 focus:outline-none focus:text-gray-600 p-2" disabled />
            </div>
          </div>
        </div>

        <hr />
        <div class="md:inline-flex space-y-4 md:space-y-0  w-full p-4 text-gray-500 items-center">
          <h2 class="md:w-1/3 mx-auto max-w-sm">Personal info</h2>
          <div class="md:w-2/3 mx-auto max-w-sm space-y-5">
            <div>
              <label class="text-sm text-gray-400">Full name</label>
              <div class="w-full inline-flex border">
                <div class="w-1/12 pt-2 bg-gray-100">
                  <svg fill="none" class="w-6 text-gray-400 mx-auto" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                  </svg>
                </div>
                <input type="text" name="fullname" value="<?= $fullname ?>" class="w-11/12 focus:outline-none focus:text-gray-600 p-2" />
              </div>
            </div>
          </div>
        </div>

        <hr />
        <div class="md:inline-flex space-y-4 md:space-y-0  w-full p-4 text-gray-500 items-center">
          <h2 class="md:w-1/3 mx-auto max-w-sm">Change password</h2>
          <div class="md:w-2/3 mx-auto max-w-sm space-y-5">
            <div>
              <label class="text-sm text-gray-400">New password</label>
              <div class="w-full inline-flex border">
                <div class="w-1/12 pt-2 bg-gray-100">
                  <svg fill="none" class="w-6 text-gray-400 mx-auto" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                  </svg>
                </div>
                <input type="text" value="" name="password" class="w-11/12 focus:outline-none focus:text-gray-600 p-2" />
              </div>
            </div>
          </div>
        </div>

        <hr />
        <div class="md:inline-flex space-y-4 md:space-y-0  w-full p-4 text-gray-500 items-center">
          <h2 class="md:w-1/3 mx-auto max-w-sm">Ảnh</h2>
          <div class="md:w-2/3 mx-auto max-w-sm space-y-5">
            <input id="file-upload" type="file" name="file-upload" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-md cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
          </div>
        </div>

        <input type="text" name="id" value="<?= $userID ?>" hidden>

        <hr />
        <div class="space-y-4 md:space-y-0  w-full p-4 text-gray-500 items-center">
          <input type="submit" name="updateAccount" value="Cập nhật" class="w-full cursor-pointer p-2 rounded-md bg-blue-200" />
        </div>


        <hr />
        <div class="w-full p-4 text-right text-gray-500">
          <a href="" class="inline-flex items-center focus:outline-none mr-4">
            <svg fill="none" class="w-4 mr-2" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
            </svg>
            Delete account
          </a>

          <a href="index.php?act=logout" class="inline-flex items-center focus:outline-none mr-4">
            <svg fill="none" class="w-4 mr-2" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
            </svg>
            Đăng xuất
          </a>
        </div>
      </form>
    </div>
  </div>
</section>