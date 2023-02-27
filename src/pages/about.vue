<script setup lang="ts">
definePageMeta({
  layout: 'base-layout',
})

</script>
<template>
  <div class="mt-20 w-full">
    <div class="w-full ">
      <p class="flex items-center justify-around">
        <span>情報登録日：2023/02/24 </span>
        <span>情報更新日：2023/02/24</span>
        <span>掲載期限：2023/03/09 (あと<span class="countNum">13</span>日)</span>
      </p>

      <p class="w-full text-right">
        <span class="text-indigo-700 underline cursor-pointer text-right w-full">
            <a >印刷する</a>
        </span>
      </p>

      <div class="flex items-center justify-around bg-black text-white py-4 rounded-t-md">
        <p class="bg-[#FFECEA]"><span class="text-black text-xs px-2 py-1">区分マンション</span></p>
        <h1 class="font-bold text-lg">琴岡ビル</h1>
        <ul class="">
          <li><p class="bg-red-700 text-white text-sm px-2 py-1">本日掲載</p></li>
        </ul>
        <div class="flex items-center justify-around space-x-2" id="">
          <p class="bg-white text-black px-1 text-xs"><span id="" class="text-lg text-red-700 px-1">0</span>人が登録中</p>
          <p class="" id="" data-favorite-config="{&quot;bukkenId&quot;:387840012033,&quot;favListUrl&quot;:&quot;https://toushi.homes.co.jp/mypage/property/favorite/&quot;}">
            <a href="#" title="お気に入りに追加" class="bg-white text-black text-xs rounded-full font-bold px-2 py-1" id="favorite387840012033">お気に入りに追加</a>
          </p>
        </div><!-- /favoriteInfo -->
      </div><!-- /bukkenDetailHeader -->

      <div class="w-full border bg-gray-100">
        <div class="w-full">
          <table class="w-5/6 mx-auto my-8">
            <tbody><tr class="is-supplementExistence">
              <th class="border bg-[#eef6f6] text-lg px-1 pt-1">価格</th>
              <td class="border text-lg text-center py-1"><strong>620万円</strong>
                <span class="">平米単価：15.25万円</span>
              </td>
              <th class="border bg-[#eef6f6] text-lg px-1 pt-1">利回り</th>
              <td class="border text-lg text-center py-1"><strong>未定</strong></td>
            </tr>
            <tr>
              <th class="border bg-[#eef6f6] text-lg px-1 pt-1">住所</th>
              <td class="border text-lg text-center py-1" colspan="3">
                兵庫県姫路市琴岡町
              </td>
            </tr>
            <tr>
              <th class="border bg-[#eef6f6] text-lg px-1 pt-1">交通</th>
              <td class="border text-lg text-center py-1" colspan="3">
                山陽電鉄本線 山陽姫路駅 徒歩21分<br>JR東海道・山陽本線 姫路駅 徒歩23分
                <a href="http://transit.homes.jp/expwww/route.cgi?lndmk=%8B%D5%89%AA%83r%83%8B&amp;lndst=26385,26524&amp;lndtr=%93k%95%E021%95%AA,%93k%95%E023%95%AA&amp;lndtm=21,23" target="_blank">乗換案内</a>
              </td>
            </tr>
            </tbody>
          </table>
        </div>


        <div id="prg-bukkenImages" class="flex items-center justify-center">
          <div class="w-1/2 mx-auto">
            <div class="">
              <img class="w-10/12 mx-auto" src="https://image.homes.co.jp/smallimg/image.php?file=http%3A%2F%2Fimg.homes.jp%2F9g642rjpzf2kew5.jpg&amp;width=567&amp;height=372" id="mPhoto" alt="区分マンション-姫路市琴岡町 間取り" oncontextmenu="return(false);">
            </div>
          </div><!-- /viewArea -->

          <div class="w-1/2 border border-black mr-3 mx-auto" data-box-size="12">
            <ul class="grid grid-cols-3 mx-auto gap-1" id="photobox_1" data-box-number="1">

              <li class="w-30 h-30 m-auto">
                <a class="prg-thumb" href="#" id="BukkenPhoto_1" data-sc="{
                &quot;bukkenId&quot;: &quot;387840012033&quot;,
                &quot;memberId&quot;: &quot;38784&quot;
              }" data-photo-number="1" data-thumbnail-option="{
                &quot;number&quot;: &quot;1&quot;,
                &quot;src&quot;: &quot;https://image.homes.co.jp/smallimg/image.php?file=http%3A%2F%2Fimg.homes.jp%2F9g642rjpzf2kew5.jpg&amp;width=567&amp;height=372&quot;,
                &quot;alt&quot;: &quot;区分マンション-姫路市琴岡町 間取り&quot;,
                &quot;comment&quot;: &quot;間取り&quot;
              }">
                  <img src="https://image.homes.co.jp/smallimg/image.php?file=http%3A%2F%2Fimg.homes.jp%2F9g642rjpzf2kew5.jpg&amp;width=567&amp;height=372" id="thumbnailPhoto_1" alt="区分マンション-姫路市琴岡町 間取り" oncontextmenu="return(false);">
                  <span class="info" id="BukkenPhotoComment_1">間取り</span>
                </a>
              </li>

              <li class="w-30 h-30 m-auto">
                <a class="prg-thumb" href="#" id="BukkenPhoto_2" data-sc="{
                &quot;bukkenId&quot;: &quot;387840012033&quot;,
                &quot;memberId&quot;: &quot;38784&quot;
              }" data-photo-number="2" data-thumbnail-option="{
                &quot;number&quot;: &quot;2&quot;,
                &quot;src&quot;: &quot;https://image.homes.co.jp/smallimg/image.php?file=http%3A%2F%2Fimg.homes.jp%2Fmxoa2rjpzf2kew6.jpg&amp;width=567&amp;height=372&quot;,
                &quot;alt&quot;: &quot;区分マンション-姫路市琴岡町 外観&quot;,
                &quot;comment&quot;: &quot;外観&quot;
              }">
                  <img src="https://image.homes.co.jp/smallimg/image.php?file=http%3A%2F%2Fimg.homes.jp%2Fmxoa2rjpzf2kew6.jpg&amp;width=567&amp;height=372" id="thumbnailPhoto_2" alt="区分マンション-姫路市琴岡町 外観" oncontextmenu="return(false);">
                  <span class="info" id="BukkenPhotoComment_2">外観</span>
                </a>
              </li>

              <li class="w-30 h-30 m-auto">
                <a class="prg-thumb" href="#" id="BukkenPhoto_3" data-sc="{
                &quot;bukkenId&quot;: &quot;387840012033&quot;,
                &quot;memberId&quot;: &quot;38784&quot;
              }" data-photo-number="3" data-thumbnail-option="{
                &quot;number&quot;: &quot;3&quot;,
                &quot;src&quot;: &quot;https://image.homes.co.jp/smallimg/image.php?file=http%3A%2F%2Fimg.homes.jp%2F41m52rjpzf2kew7.jpg&amp;width=567&amp;height=372&quot;,
                &quot;alt&quot;: &quot;区分マンション-姫路市琴岡町 外観&quot;,
                &quot;comment&quot;: &quot;外観&quot;
              }">
                  <img src="https://image.homes.co.jp/smallimg/image.php?file=http%3A%2F%2Fimg.homes.jp%2F41m52rjpzf2kew7.jpg&amp;width=567&amp;height=372" id="thumbnailPhoto_3" alt="区分マンション-姫路市琴岡町 外観" oncontextmenu="return(false);">
                  <span class="info" id="BukkenPhotoComment_3">外観</span>
                </a>
              </li>

              <li class="w-30 h-30 m-auto">
                <a class="prg-thumb" href="#" id="BukkenPhoto_4" data-sc="{
                &quot;bukkenId&quot;: &quot;387840012033&quot;,
                &quot;memberId&quot;: &quot;38784&quot;
              }" data-photo-number="4" data-thumbnail-option="{
                &quot;number&quot;: &quot;4&quot;,
                &quot;src&quot;: &quot;https://image.homes.co.jp/smallimg/image.php?file=http%3A%2F%2Fimg.homes.jp%2Fhr9e2rjpzf2kew8.jpg&amp;width=567&amp;height=372&quot;,
                &quot;alt&quot;: &quot;区分マンション-姫路市琴岡町 外観&quot;,
                &quot;comment&quot;: &quot;外観&quot;
              }">
                  <img src="https://image.homes.co.jp/smallimg/image.php?file=http%3A%2F%2Fimg.homes.jp%2Fhr9e2rjpzf2kew8.jpg&amp;width=567&amp;height=372" id="thumbnailPhoto_4" alt="区分マンション-姫路市琴岡町 外観" oncontextmenu="return(false);">
                  <span class="info" id="BukkenPhotoComment_4">外観</span>
                </a>
              </li>

              <li class="w-30 h-30 m-auto">
                <a class="prg-thumb" href="#" id="BukkenPhoto_5" data-sc="{
                &quot;bukkenId&quot;: &quot;387840012033&quot;,
                &quot;memberId&quot;: &quot;38784&quot;
              }" data-photo-number="5" data-thumbnail-option="{
                &quot;number&quot;: &quot;5&quot;,
                &quot;src&quot;: &quot;https://image.homes.co.jp/smallimg/image.php?file=http%3A%2F%2Fimg.homes.jp%2Fyyoa2rjpzf2kew9.jpg&amp;width=567&amp;height=372&quot;,
                &quot;alt&quot;: &quot;区分マンション-姫路市琴岡町 外観&quot;,
                &quot;comment&quot;: &quot;外観&quot;
              }">
                  <img src="https://image.homes.co.jp/smallimg/image.php?file=http%3A%2F%2Fimg.homes.jp%2Fyyoa2rjpzf2kew9.jpg&amp;width=567&amp;height=372" id="thumbnailPhoto_5" alt="区分マンション-姫路市琴岡町 外観" oncontextmenu="return(false);">
                  <span class="info" id="BukkenPhotoComment_5">外観</span>
                </a>
              </li>

              <li class="w-30 h-30 m-auto">
                <a class="prg-thumb" href="#" id="BukkenPhoto_6" data-sc="{
                &quot;bukkenId&quot;: &quot;387840012033&quot;,
                &quot;memberId&quot;: &quot;38784&quot;
              }" data-photo-number="6" data-thumbnail-option="{
                &quot;number&quot;: &quot;6&quot;,
                &quot;src&quot;: &quot;https://image.homes.co.jp/smallimg/image.php?file=http%3A%2F%2Fimg.homes.jp%2F3hea2rjpzf2kewa.jpg&amp;width=567&amp;height=372&quot;,
                &quot;alt&quot;: &quot;区分マンション-姫路市琴岡町 外観&quot;,
                &quot;comment&quot;: &quot;外観&quot;
              }">
                  <img src="https://image.homes.co.jp/smallimg/image.php?file=http%3A%2F%2Fimg.homes.jp%2F3hea2rjpzf2kewa.jpg&amp;width=567&amp;height=372" id="thumbnailPhoto_6" alt="区分マンション-姫路市琴岡町 外観" oncontextmenu="return(false);">
                  <span class="info" id="BukkenPhotoComment_6">外観</span>
                </a>
              </li>

              <li class="w-30 h-30 m-auto">
                <a class="prg-thumb" href="#" id="BukkenPhoto_7" data-sc="{
                &quot;bukkenId&quot;: &quot;387840012033&quot;,
                &quot;memberId&quot;: &quot;38784&quot;
              }" data-photo-number="7" data-thumbnail-option="{
                &quot;number&quot;: &quot;7&quot;,
                &quot;src&quot;: &quot;https://image.homes.co.jp/smallimg/image.php?file=http%3A%2F%2Fimg.homes.jp%2Fcpux2rjpzf2kewb.jpg&amp;width=567&amp;height=372&quot;,
                &quot;alt&quot;: &quot;区分マンション-姫路市琴岡町 その他&quot;,
                &quot;comment&quot;: &quot;その他&quot;
              }">
                  <img src="https://image.homes.co.jp/smallimg/image.php?file=http%3A%2F%2Fimg.homes.jp%2Fcpux2rjpzf2kewb.jpg&amp;width=567&amp;height=372" id="thumbnailPhoto_7" alt="区分マンション-姫路市琴岡町 その他" oncontextmenu="return(false);">
                  <span class="info" id="BukkenPhotoComment_7">その他</span>
                </a>
              </li>

              <li class="w-30 h-30 m-auto">
                <a class="prg-thumb" href="#" id="BukkenPhoto_8" data-sc="{
                &quot;bukkenId&quot;: &quot;387840012033&quot;,
                &quot;memberId&quot;: &quot;38784&quot;
              }" data-photo-number="8" data-thumbnail-option="{
                &quot;number&quot;: &quot;8&quot;,
                &quot;src&quot;: &quot;https://image.homes.co.jp/smallimg/image.php?file=http%3A%2F%2Fimg.homes.jp%2Fr9y22rjpzf2kewc.jpg&amp;width=567&amp;height=372&quot;,
                &quot;alt&quot;: &quot;区分マンション-姫路市琴岡町 外観&quot;,
                &quot;comment&quot;: &quot;外観&quot;
              }">
                  <img src="https://image.homes.co.jp/smallimg/image.php?file=http%3A%2F%2Fimg.homes.jp%2Fr9y22rjpzf2kewc.jpg&amp;width=567&amp;height=372" id="thumbnailPhoto_8" alt="区分マンション-姫路市琴岡町 外観" oncontextmenu="return(false);">
                  <span class="info" id="BukkenPhotoComment_8">外観</span>
                </a>
              </li>

              <li class="w-30 h-30 m-auto">
                <a class="prg-thumb" href="#" id="BukkenPhoto_9" data-sc="{
                &quot;bukkenId&quot;: &quot;387840012033&quot;,
                &quot;memberId&quot;: &quot;38784&quot;
              }" data-photo-number="9" data-thumbnail-option="{
                &quot;number&quot;: &quot;9&quot;,
                &quot;src&quot;: &quot;https://image.homes.co.jp/smallimg/image.php?file=http%3A%2F%2Fimg.homes.jp%2F5n732rjpzf2kewq.jpg&amp;width=567&amp;height=372&quot;,
                &quot;alt&quot;: &quot;区分マンション-姫路市琴岡町 Ａプライス姫路店&quot;,
                &quot;comment&quot;: &quot;Ａプライス姫路店&quot;
              }">
                  <img src="https://image.homes.co.jp/smallimg/image.php?file=http%3A%2F%2Fimg.homes.jp%2F5n732rjpzf2kewq.jpg&amp;width=567&amp;height=372" id="thumbnailPhoto_9" alt="区分マンション-姫路市琴岡町 Ａプライス姫路店" oncontextmenu="return(false);">
                  <span class="info" id="BukkenPhotoComment_9">周辺</span>
                </a>
              </li>

              <li class="w-30 h-30 m-auto">
                <a class="prg-thumb" href="#" id="BukkenPhoto_10" data-sc="{
                &quot;bukkenId&quot;: &quot;387840012033&quot;,
                &quot;memberId&quot;: &quot;38784&quot;
              }" data-photo-number="10" data-thumbnail-option="{
                &quot;number&quot;: &quot;10&quot;,
                &quot;src&quot;: &quot;https://image.homes.co.jp/smallimg/image.php?file=http%3A%2F%2Fimg.homes.jp%2Fual72rjpzf2kews.jpg&amp;width=567&amp;height=372&quot;,
                &quot;alt&quot;: &quot;区分マンション-姫路市琴岡町 ザグザグ 姫路土山店&quot;,
                &quot;comment&quot;: &quot;ザグザグ 姫路土山店&quot;
              }">
                  <img src="https://image.homes.co.jp/smallimg/image.php?file=http%3A%2F%2Fimg.homes.jp%2Fual72rjpzf2kews.jpg&amp;width=567&amp;height=372" id="thumbnailPhoto_10" alt="区分マンション-姫路市琴岡町 ザグザグ 姫路土山店" oncontextmenu="return(false);">
                  <span class="info" id="BukkenPhotoComment_10">周辺</span>
                </a>
              </li>

              <li class="w-30 h-30 m-auto">
                <a class="prg-thumb" href="#" id="BukkenPhoto_11" data-sc="{
                &quot;bukkenId&quot;: &quot;387840012033&quot;,
                &quot;memberId&quot;: &quot;38784&quot;
              }" data-photo-number="11" data-thumbnail-option="{
                &quot;number&quot;: &quot;11&quot;,
                &quot;src&quot;: &quot;https://image.homes.co.jp/smallimg/image.php?file=http%3A%2F%2Fimg.homes.jp%2F5jr12rjpzf2kewt.jpg&amp;width=567&amp;height=372&quot;,
                &quot;alt&quot;: &quot;区分マンション-姫路市琴岡町 マックスバリュ南今宿店&quot;,
                &quot;comment&quot;: &quot;マックスバリュ南今宿店&quot;
              }">
                  <img src="https://image.homes.co.jp/smallimg/image.php?file=http%3A%2F%2Fimg.homes.jp%2F5jr12rjpzf2kewt.jpg&amp;width=567&amp;height=372" id="thumbnailPhoto_11" alt="区分マンション-姫路市琴岡町 マックスバリュ南今宿店" oncontextmenu="return(false);">
                  <span class="info" id="BukkenPhotoComment_11">周辺</span>
                </a>
              </li>

              <li class="w-30 h-30 m-auto">
                <a class="prg-thumb" href="#" id="BukkenPhoto_12" data-sc="{
                &quot;bukkenId&quot;: &quot;387840012033&quot;,
                &quot;memberId&quot;: &quot;38784&quot;
              }" data-photo-number="12" data-thumbnail-option="{
                &quot;number&quot;: &quot;12&quot;,
                &quot;src&quot;: &quot;https://image.homes.co.jp/smallimg/image.php?file=http%3A%2F%2Fimg.homes.jp%2F14vf2rjpzf2kewu.jpg&amp;width=567&amp;height=372&quot;,
                &quot;alt&quot;: &quot;区分マンション-姫路市琴岡町 スーパードラッグひまわり今宿店&quot;,
                &quot;comment&quot;: &quot;スーパードラッグひまわり今宿店&quot;
              }">
                  <img src="https://image.homes.co.jp/smallimg/image.php?file=http%3A%2F%2Fimg.homes.jp%2F14vf2rjpzf2kewu.jpg&amp;width=567&amp;height=372" id="thumbnailPhoto_12" alt="区分マンション-姫路市琴岡町 スーパードラッグひまわり今宿店" oncontextmenu="return(false);">
                  <span class="info" id="BukkenPhotoComment_12">周辺</span>
                </a>
              </li>
            </ul>
            <ul class="thumbs" id="photobox_2" data-box-number="2" style="display:none;">

              <li class="w-30 h-30 m-auto">
                <a class="prg-thumb" href="#" id="BukkenPhoto_13" data-sc="{
                &quot;bukkenId&quot;: &quot;387840012033&quot;,
                &quot;memberId&quot;: &quot;38784&quot;
              }" data-photo-number="13" data-thumbnail-option="{
                &quot;number&quot;: &quot;13&quot;,
                &quot;src&quot;: &quot;https://image.homes.co.jp/smallimg/image.php?file=http%3A%2F%2Fimg.homes.jp%2Fx9gz2rjpzf2kewx.jpg&amp;width=567&amp;height=372&quot;,
                &quot;alt&quot;: &quot;区分マンション-姫路市琴岡町 姫路市立船場小学校&quot;,
                &quot;comment&quot;: &quot;姫路市立船場小学校&quot;
              }">
                  <img src="https://image.homes.co.jp/smallimg/image.php?file=http%3A%2F%2Fimg.homes.jp%2Fx9gz2rjpzf2kewx.jpg&amp;width=567&amp;height=372" id="thumbnailPhoto_13" alt="区分マンション-姫路市琴岡町 姫路市立船場小学校" oncontextmenu="return(false);">
                  <span class="info" id="BukkenPhotoComment_13">周辺</span>
                </a>
              </li>

              <li class="w-30 h-30 m-auto">
                <a class="prg-thumb" href="#" id="BukkenPhoto_14" data-sc="{
                &quot;bukkenId&quot;: &quot;387840012033&quot;,
                &quot;memberId&quot;: &quot;38784&quot;
              }" data-photo-number="14" data-thumbnail-option="{
                &quot;number&quot;: &quot;14&quot;,
                &quot;src&quot;: &quot;https://image.homes.co.jp/smallimg/image.php?file=http%3A%2F%2Fimg.homes.jp%2F0ahd2rjpzf2kewy.jpg&amp;width=567&amp;height=372&quot;,
                &quot;alt&quot;: &quot;区分マンション-姫路市琴岡町 姫路市立琴陵中学校&quot;,
                &quot;comment&quot;: &quot;姫路市立琴陵中学校&quot;
              }">
                  <img src="https://image.homes.co.jp/smallimg/image.php?file=http%3A%2F%2Fimg.homes.jp%2F0ahd2rjpzf2kewy.jpg&amp;width=567&amp;height=372" id="thumbnailPhoto_14" alt="区分マンション-姫路市琴岡町 姫路市立琴陵中学校" oncontextmenu="return(false);">
                  <span class="info" id="BukkenPhotoComment_14">周辺</span>
                </a>
              </li>
            </ul>
          </div><!-- /thumbnailArea -->
        </div><!-- /bukkenImages -->
        <div class="flex items-center justify-center">
          <NuxtLink
                class="bg-blue-600 px-3 py-2 font-bold rounded-full text-white my-5"
                to="/contact"
            >
            この物件に<span class="text-xl font-extrabold px-1">お問合せ</span>(無料)
          </NuxtLink>
        </div>
      </div>
    </div>

    <div class="my-12 border">
      <h3 class="border-l-5 pl-5 w-11/12 mx-auto my-5 text-xl font-bold border-orange-600">詳細項目</h3>
      <table class="w-11/12 mx-auto my-5">
        <tbody><tr class="inqFlame">
          <th class="border bg-[#eef6f6] text-lg px-1 pt-1">表面利回り</th>
          <td colspan="3">
            <div class="contents">
              <span class="percentage">未定</span>
              <div class="specificInquiry">
            <span class="specificInquiryText">
              実質利回りなどの物件資料を<br>不動産会社からお送りします
            </span>
                <a class="specificInquiryBtn" href="/inquire/input/b=387840012033/?nx_id=toushi_pc_detail_inquire_input_yield" target="_blank">
                  利回りの詳細を知りたい
                </a>
              </div>
            </div>
          </td>
        </tr>

        <tr>
          <th class="border bg-[#eef6f6] text-lg px-1 pt-1"><span>築年月</span></th>
          <td class="period">1966年01月</td>
          <th class="second"><span>間取り</span></th>
          <td class="madori">3K</td>
        </tr>
        <tr>
          <th class="border bg-[#eef6f6] text-lg px-1 pt-1"><span>総区画／戸数</span></th>
          <td class="border text-lg text-center py-1">-</td>
          <th class="second"><span>事務所戸数</span></th>
          <td class="border text-lg text-center py-1">-</td>
        </tr>
        <tr>
          <th class="border bg-[#eef6f6] text-lg px-1 pt-1"><span>管理費等</span></th>
          <td class="kanri_str">1,000円</td>
          <th class="second"><span>修繕積立金</span></th>
          <td class="border text-lg text-center py-1">1,600円</td>
        </tr>
        <tr>
          <th class="border bg-[#eef6f6] text-lg px-1 pt-1"><span>主要採光面</span></th>
          <td class="border text-lg text-center py-1">南</td>
          <th class="second"><span>バルコニー面積</span></th>
          <td class="border text-lg text-center py-1">-</td>
        </tr>
        <tr>
          <th class="border bg-[#eef6f6] text-lg px-1 pt-1"><span>建物構造</span></th>
          <td class="border text-lg text-center py-1">RC(鉄筋コンクリート)</td>
          <th class="second"><span>所在階／階数</span></th>
          <td class="border text-lg text-center py-1">4階／4階建</td>
        </tr>
        <tr>
          <th class="border bg-[#eef6f6] text-lg px-1 pt-1"><span>駐車場</span></th>
          <td class="border text-lg text-center py-1">空無</td>
          <th class="second"><span>土地権利</span></th>
          <td class="border text-lg text-center py-1">所有権</td>
        </tr>
        <tr>
          <th class="border bg-[#eef6f6] text-lg px-1 pt-1"><span>都市計画</span></th>
          <td class="border text-lg text-center py-1">市街化区域</td>
          <th class="second"><span>地目</span></th>
          <td class="border text-lg text-center py-1">-</td>
        </tr>
        <tr>
          <th class="border bg-[#eef6f6] text-lg px-1 pt-1"><span>建ぺい率／容積率</span></th>
          <td class="border text-lg text-center py-1">-</td>
          <th class="second"><span>国土法届出</span></th>
          <td class="border text-lg text-center py-1">不要</td>
        </tr>
        <tr>
          <th class="border bg-[#eef6f6] text-lg px-1 pt-1"><span>用途地域</span></th>
          <td class="recital">商業地域</td>
          <th class="second"><span>引渡</span></th>
          <td class="border text-lg text-center py-1">相談</td>
        </tr>
        <tr>
        </tr>
        <tr>
        </tr>
        <tr>
        </tr>
        <tr>
        </tr>
        <tr>
        </tr>

        <tr class="inqFlame">
          <th class="border bg-[#eef6f6] text-lg px-1 pt-1">現況</th>
          <td colspan="3">
            <div class="contents">
              <span>空家</span>
              <div class="specificInquiry">
            <span class="specificInquiryText">
              物件の入居状況などお気軽に<br>不動産会社へお問合せください
            </span>
                <a class="specificInquiryBtn" href="/inquire/input/b=387840012033/?nx_id=toushi_pc_detail_inquire_input_entering" target="_blank">
                  入居状況を知りたい
                </a>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <th class="border bg-[#eef6f6] text-lg px-1 pt-1"><span>専有面積</span></th>
          <td colspan="3">40.66㎡</td>
        </tr>
        <tr>
          <th class="border bg-[#eef6f6] text-lg px-1 pt-1"><span>満室想定年収</span></th>
          <td colspan="3" class="fullIncome">-</td>
        </tr>
        <tr>
          <th class="border bg-[#eef6f6] text-lg px-1 pt-1"><span>設備・条件</span></th>
          <td colspan="3" class="facility">公営水道、都市ガス、下水</td>
        </tr>
        <tr>
          <th class="border bg-[#eef6f6] text-lg px-1 pt-1"><span>備考</span></th>
          <td colspan="3" class="recital">準防火 <br>船場小学校まで約530ｍ、琴陵中学校まで約460ｍとお子様の通学も安心です</td>
        </tr>
        <tr>
          <th class="border bg-[#eef6f6] text-lg px-1 pt-1"><span>建築確認番号</span></th>
          <td colspan="3">-</td>
        </tr>
        <tr>
          <th class="border bg-[#eef6f6] text-lg px-1 pt-1"><span>管理形態</span></th>
          <td class="border text-lg text-center py-1">自主管理</td>
          <th class="second"><span>管理会社</span></th>
          <td class="border text-lg text-center py-1">-</td>
        </tr>
        <tr>
          <th class="border bg-[#eef6f6] text-lg px-1 pt-1"><span>管理その他</span></th>
          <td class="border text-lg text-center py-1">管理人/無・管理組合/有</td>
          <th class="second"><span>態様</span></th>
          <td class="border text-lg text-center py-1">仲介</td>
        </tr>

        </tbody>
      </table>
    </div>
  </div>
</template>
