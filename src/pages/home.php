
  <!-- sidebar -->
  <article class="px-2 py-3 rounded-lg flex flex-col w-[280px] bg-white">
    <h4 class="mb-2 pl-4 text-sm font-bold text-[#27272a]">Danh muc</h4>
    <div class="flex flex-col">
      <?php foreach($categories as $category): extract($category); ?>
        <div key={index}>
          <a href="<?= $categoryID ?>" class="px-4 py-2 flex items-center gap-2 rounded-lg transition-all hover:bg-[#27272a1f]">
            <img class="h-8 w-8" src='https://salt.tikicdn.com/cache/100x100/ts/category/ed/20/60/afa9b3b474bf7ad70f10dd6443211d5f.png.webp' alt="" />
            <span class="truncate text-sm text-[#38383d]"><?= $name ?></span>
          </a>
        </div>
      <?php endforeach ?>
    </div>
  </article>

  <!-- content -->
  <article class="flex-1 rounded-lg bg-white">
    <section class="w-full h-fit rounded-lg bg-white">
      <div class="p-4 flex flex-col gap-3">
        <!-- ===== Title ===== -->
        <section class="flex items-center justify-between">
          <h3 class="text-base font-semibold">Nhập khẩu chính hãng</h3>
          <a href="" class="text-sm font-medium text-[#0a68ff]">Xem tất cả</a>
        </section>

        <!--  ===== Slider Products =====  -->
        <section class="relative overflow-hidden">
          <div class="grid grid-cols-6 transition-transform duration-500 ease-in-out">
            <?php
              foreach ($products as $product):
                extract($product);
            ?>
              <div class="p-1" style=" width: 100%; ">
                <a href="index.php?act=product-detail&id=<?= $productID ?>" class="flex flex-col border rounded-lg border-[#ebebf0]">
                  <!-- {/* ===== Image product ===== */} -->
                  <div class="">
                    <img class="w-full h-fit object-cover" src="../../public/images/products/<?= $thumbnail ?>" alt="" />
                    <!-- <img class="w-full h-fit object-cover" src="../../public/images/banner.jpg" alt="" /> -->
                  </div>
                  <!-- {/* ===== infor product ===== */} -->
                  <div class="flex flex-col gap-1 p-2">
                    <div class="flex flex-col gap-1">
                      <img class="h-5 w-fit" src="https://salt.tikicdn.com/ts/upload/0f/59/82/795de6da98a5ac81ce46fb5078b65870.png" alt="" />
                      <img class="h-5 w-fit" src="https://salt.tikicdn.com/ts/tka/69/cf/22/1be823299ae34c7ddcd922e73abd4909.png" alt="" />
                    </div>
                    <div class="flex flex-col gap-1">
                      <p class="text-xs customCss"><?= $name ?></p>
                      <div class="flex items-center gap-1">
                        <img src="../../../public/images/star.svg" alt="" />
                        <img src="../../../public/images/star.svg" alt="" />
                        <img src="../../../public/images/star.svg" alt="" />
                        <img src="../../../public/images/star.svg" alt="" />
                        <img src="../../../public/images/star.svg" alt="" />
                      </div>
                      <span class="text-base font-semibold text-[#ff424e]"><?= number_format($unitPrice) ?><sup>₫</sup></span>
                      <div class="flex items-start gap-1">
                        <span class="px-1 text-xs rounded-lg bg-[#f5f5fa]">-<?= number_format($discount)  ?>%</span>
                        <span class="text-[10px] line-through text-[#808089]">1.800.000<sup>đ</sup></span>
                      </div>
                    </div>
                    <div class="fle flex-col gap-1">
                      <span class="text-[10px] truncate">Made in Korea</span>
                      <div class="w-full h-[1px] bg-[#ebebf0]"></div>
                      <span class="text-[10px] truncate text-[#808089]">Giao thứ 2, 10/06</span>
                    </div>
                  </div>
                </a>
              </div>
            <?php endforeach; ?>
          </div>
        </section>
      </div>
    </section>
  </article>


