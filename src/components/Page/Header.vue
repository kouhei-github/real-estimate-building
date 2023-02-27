<script lang="ts" setup>

interface Header {
  accountName: string
  menus: Array<string>
}

const header = reactive<Header>({
  accountName: "都内グルメ",
  menus: ["収益物件を検索", "売りアパート", "区分マンション", "一棟マンション", "戸建賃貸", "収益ビル店舗", "事務所", "その他土地", "セミナー検索"]
})
</script>

<template>
  <div class="mt-2 w-full">
    <div class="flex items-center justify-center bg-white py-5">
      <div class="flex items-center justify-center w-1/2 mx-auto space-x-8">
        <NuxtLink
           to="/"
        >
            <img alt="ロゴ" class="w-18 h-18" src="@/assets/images/coldrain.jpg" />
        </NuxtLink>
        <p class="border-l border-gray-300 pl-3 text-gray-200">賃貸物件</p>
        <p class="text-orange-500">様々な物件をご紹介できます</p>
      </div>
      <div class="flex items-center justify-center w-1/2 mx-auto space-x-8">
        <div class="flex flex-col items-center justify-center text-sm space-y-1">
          <span>ゲストさん</span>
          <span class="cursor-pointer bg-orange-500 text-white px-1 rounded-md">ログイン</span>
        </div>
        <div class="flex flex-col items-center justify-center text-sm space-y-1">
          <span class="text-orange-500 font-bold text-lg">0</span>
          <span>最近見た物件</span>
        </div>
        <div class="flex flex-col items-center justify-center text-sm space-y-1">
          <span class="text-orange-500 font-bold text-lg">0</span>
          <span>お気に入り</span>
        </div>
        <div class="flex flex-col items-center justify-center text-sm space-y-1">
          <span class="text-orange-500 font-bold text-lg">0</span>
          <span>保存した件数</span>
        </div>
      </div>

    </div>
    <div class="flex items-center justify-center space-x-2 w-full border-y border-gray-200 py-3">
      <div
          class="bg-white w-max border px-3 py-2 hover:bg-gray-200 cursor-pointer font-bold shadow"
          v-for="(value, key) in header.menus"
          :key="key"
      >
        {{ value }}
      </div>
    </div>
  </div>

</template>
