<script lang="ts" setup>
const fotters = reactive<Array<string>>(['不動産とは', 'ご意見・要望', '情報制度No1への取り組み', 'サービス利用規約', '免責事項', '個人情報について', 'リンクポリシー', '掲載について', 'スタッフ募集', '運営会社'])
</script>

<template>
    <div class="bg-white w-full flex items-center justify-center border-t-2 py-4">
        <div class="1/3 mx-auto">
            <img alt="ロゴ" class="w-22 h-22" src="@/assets/images/coldrain.jpg" />
        </div>

        <div class="w-2/3 mr-auto grid grid-cols-5 gap-5">
            <a v-for="(link, idx) in fotters" class="w-full text-xs font-bold text-left border-r border-black cursor-pointer hover:underline hover:underline-offset-4 hover:text-indigo-800">{{ link }}</a>
        </div>
    </div>
</template>
