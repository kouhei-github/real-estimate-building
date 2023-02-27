<script lang="ts" setup>

interface Props {
  url: string;
  buildingName: string;
}

const props = defineProps<Props>();

</script>

<template>
  <div class="border rounded-md w-full h-[420px] bg-gray-100">
    <div class="h-[5px] w-full bg-black rounded-t-md" />
    <div class="flex items-center h-full bg-white">
      <div class="w-[75px] h-full flex flex-col justify-around items-center border px-2">
        <div class="text-white font-bold bg-orange-400 py-1 px-1 text-[0.5rem]">チェック</div>
        <input class="w-[22px] h-[22px]" type="checkbox" />
      </div>
      <div class="w-full">
        <div class="w-full flex items-center justify-around border-b pb-3">
          <div class="cursor-pointer bg-gradient-to-t from-[#ffecec] text-xs to-[#fcd1cf] px-2 py-1">区分マンション</div>
          <div>
            <NuxtLink
                class="font-bold hover:underline text-indigo-800 "
                :to="props.url"
            >
              {{ props.buildingName }}
            </NuxtLink>
          </div>
          <div>本日掲載</div>
        </div>
        <div class="flex items-center justify-center w-full space-x-11 mt-4">
          <div class="text-sm">
            <img class="w-[130px] h-[130px] m-auto object-contain" src="@/assets/images/image.webp" alt="">
            <div class="flex items-center justify-between mt-2">
              <p>登録画像</p>
              <NuxtLink
                  class="font-bold hover:underline text-indigo-800 "
                  :to="props.url"
              >
                もっと詳しく見る
              </NuxtLink>
            </div>
          </div>
          <div>
            <table>
              <tbody>
              <tr>
                <th class="border bg-[#eef6f6] text-xs px-1 pt-1">物件名</th>
                <td class="border text-sm text-center py-1" colspan="3">店舗・事務所・その他 沖縄県豊見城市</td>
              </tr>
              <tr>
                <th class="border bg-[#eef6f6] text-xs px-1 pt-1">価格</th>
                <td class="font-bold text-orange-500 text-xl text-center border"><span class="valueNum"><span>1,250万円</span></span></td>
                <th class="border bg-[#eef6f6] text-xs px-1 pt-1">利回り</th>
                <td class="font-bold text-orange-500 text-xl text-center border"><span class="perNum"><span>未定</span></span></td>
              </tr>
              <tr>
                <th class="border bg-[#eef6f6] text-xs px-1 pt-1">住所<br>交通</th>
                <td colspan="3" class="border text-sm px-1">
                  <span class="address">沖縄県豊見城市嘉数198番地</span>
                  <span class="walk">嘉数公民館前下車 徒歩5分</span>
                </td>
              </tr>
              </tbody>
            </table>

            <table class="w-full">
              <tbody>
                <tr>
                  <th class="border bg-[#eef6f6] text-xs px-1 pt-1">築年月</th>
                  <th class="border bg-[#eef6f6] text-xs px-1 pt-1">
                    建物面積
                  </th>
                  <th class="border bg-[#eef6f6] text-xs px-1 pt-1">建物構造</th>
                  <th class="border bg-[#eef6f6] text-xs px-1 pt-1">総区画/戸数</th>
                </tr>
                <tr>
                  <td class="border text-sm text-center py-1">1975年04月</td>
                  <td class="border text-sm text-center py-1">141.53㎡</td>
                  <td class="border text-sm text-center py-1">その他</td>
                  <td class="border text-sm text-center py-1">-</td>
                </tr>
              </tbody>
            </table>
          </div>

        </div>

        <div class="w-full flex items-center justify-center my-4 border-y-2 py-2">
          <div class="w-1/6 mx-auto  text-center text-orange-500 text-sm">
            ここがおすすめ
          </div>
          <div class="w-5/6 mx-auto text-sm ">
            ■制震性能＋耐震性能「ＳＡＦＥ365」搭載の地震に強い家！ ■水回りを近くにまとめて家事動線を短縮！効率アップに繋がる間取り！ ■多賀城東小学校まで徒歩約6分／東豊中学校まで徒歩約5分！
          </div>
        </div>

        <div class="w-full flex items-center justify-center my-4">
          <div class="w-1/4 mx-auto  text-center">
            <p class="text-sm text-gray-400">株式会社フューチャー</p>
            <p class="text-sm text-gray-400">情報更新日: 2023/03/12</p>
          </div>
          <div class="w-1/4 mx-auto border  text-center"><span class="text-xl text-orange-500 font-bold">0</span>人が登録中</div>
          <div class="w-1/4 mx-auto border rounded-full px-2 py-1 cursor-pointer text-center">お気に入りに追加</div>
          <NuxtLink
               to="/contact"
               class="w-1/4 mx-auto border rounded-full px-2 py-1 bg-[#0000CC] text-white font-bold cursor-pointer text-center"
          >
            お問合せ<span class="text-xs btext-gray-300">(無料)</span>
          </NuxtLink>
        </div>
      </div>
    </div>
  </div>
</template>
