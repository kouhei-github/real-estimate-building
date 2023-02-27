<script lang="ts" setup>
interface Props {
  currentPage: number;
}

const props = defineProps<Props>();

</script>

<template>
    <div class="full flex items-center justify-center">
        <div class="font-bold"><span class="text-[#ed6103] text-lg">2,833</span>件</div>
        <div>（総物件数：<span class=font-bold>13,678件</span>）</div>
        <div>前へ</div>
        <div v-for="(item, key) in "></div>
        <div>次へ</div>
    </div>
</template>
