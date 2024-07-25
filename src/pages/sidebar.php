<article class="px-2 py-3 rounded-lg flex flex-col w-[280px] bg-white">
  <form action="index.php?act=products-show" method="post" class="flex items-center gap-2 mb-5">
    <input name="keyw" class="text-base flex-grow outline-none px-2 rounded-md" type="text" placeholder="Search products" />
    <input type="submit" name="searchProducts" class="bg-indigo-500 text-white text-sm rounded-lg px-1 py-1 font-thin cursor-pointer"/>
  </form>
  <h4 class="mb-2 pl-4 text-sm font-bold text-[#27272a]">Danh muc</h4>
  <div class="flex flex-col">
    <?php foreach($categories as $category): extract($category); ?>
      <div key={index}>
        <a href="index.php?act=products-show&idCate=<?= $categoryID ?>" class="px-4 py-2 flex items-center gap-2 rounded-lg transition-all hover:bg-[#27272a1f]">
          <img class="h-8 w-8" src='https://salt.tikicdn.com/cache/100x100/ts/category/ed/20/60/afa9b3b474bf7ad70f10dd6443211d5f.png.webp' alt="" />
          <span class="truncate text-sm text-[#38383d]"><?= $name ?></span>
        </a>
      </div>
    <?php endforeach ?>
  </div>
</article>