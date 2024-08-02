<?php
  if (isset($_SESSION['user'])) {
    $userCurrent = $_SESSION['user'];
  }
?>

<section class="bg-white dark:bg-gray-900 my-3 py-3  rounded-lg antialiased">
  <div class="px-4">
    <div class="flex justify-between items-center mb-6">
      <h2 class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white">Bình luận</h2>
    </div>

    <?php if (isset($userCurrent)): ?>
      <form class="mb-6" action="index.php?act=product-detail&id=<?= $productID ?>" method="post">
        <div class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
          <label for="comment" class="sr-only">Your comment</label>
          <textarea id="comment" rows="6" name="commentProduct" class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none dark:text-white dark:placeholder-gray-400 dark:bg-gray-800" placeholder="Write a comment..." required></textarea>
        </div>
        <input type="text" name="userID" value="<?= isset($userCurrent) ? (int)$userCurrent['userID'] : '' ?>" class="hidden">
        <input type="submit" name="postComment" value="Bình luận" class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center cursor-pointer text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800" />
      </form>
    <?php endif ?>

    <?php foreach ($commentByProduct as $comment) : ?>
      <article class="p-6 text-base bg-white rounded-lg dark:bg-gray-900 border-t border-gray-200 dark:border-gray-700">
        <footer class="flex justify-between items-center mb-2">
          <div class="flex items-center">
            <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white font-semibold">
              <?php foreach($getAllUser as $user) {
                if ($user['userID'] === $comment['userID']) {
                  echo '<img class="mr-2 w-6 h-6 rounded-full" src="./public/images/products/'.$user['avatar'].'" alt="Michael Gough">';
                  echo $user['fullname'];
                }
              } ?>
            </p>
            <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate datetime="2022-02-08" title="February 8th, 2022"><?= $comment['commentAt'] ?></time></p>
          </div>
          <button id="dropdownComment1Button" data-dropdown-toggle="dropdownComment1" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 dark:text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button">
            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
              <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
            </svg>
            <span class="sr-only">Comment settings</span>
          </button>
        </footer>
        <p class="text-gray-500 dark:text-gray-400"><?= $comment['content'] ?></p>
        <div class="flex items-center mt-4 space-x-4">
          <button type="button" class="flex items-center text-sm text-gray-500 hover:underline dark:text-gray-400 font-medium">
            <svg class="mr-1.5 w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5h5M5 8h2m6-3h2m-5 3h6m2-7H2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h3v5l5-5h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z" />
            </svg>
            Reply
          </button>
        </div>
      </article>
    <?php endforeach ?>



    <!-- <article class="p-6 mb-3 text-base bg-white border-t border-gray-200 dark:border-gray-700 dark:bg-gray-900">
      <footer class="flex justify-between items-center mb-2">
        <div class="flex items-center">
          <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white font-semibold"><img class="mr-2 w-6 h-6 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="Bonnie Green">Bonnie Green</p>
          <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate datetime="2022-03-12" title="March 12th, 2022">Mar. 12, 2022</time></p>
        </div>
        <button id="dropdownComment3Button" data-dropdown-toggle="dropdownComment3" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 dark:text-gray-40 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button">
          <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
            <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
          </svg>
          <span class="sr-only">Comment settings</span>
        </button>
      </footer>
      <p class="text-gray-500 dark:text-gray-400">The article covers the essentials, challenges, myths and stages the UX designer should consider while creating the design strategy.</p>
      <div class="flex items-center mt-4 space-x-4">
        <button type="button" class="flex items-center text-sm text-gray-500 hover:underline dark:text-gray-400 font-medium">
          <svg class="mr-1.5 w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5h5M5 8h2m6-3h2m-5 3h6m2-7H2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h3v5l5-5h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z" />
          </svg>
          Reply
        </button>
      </div>
    </article> -->

  </div>
</section>