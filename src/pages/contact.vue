<script setup lang="ts">
definePageMeta({
  layout: 'base-layout',
})

</script>
<template>
  <div class="mt-20 w-full border border-black rounded-t-lg">
    <div class="bg-black py-5 px-5 flex items-center justify-center rounded-t-lg">
        <div class="1/6 mx-auto">
            <img alt="ロゴ" class="" src="@/assets/images/mail.png" />
        </div>
        <div class="5/6 mx-auto grid grid-cols-3 gap-5">
            <div class="bg-[#ed6103] text-center text-white px-3 py-1">1. お客様情報の入力</div>
            <div class="bg-white text-center text-black px-3 py-1">2. 内容確認</div>
            <div class="bg-white text-center text-black px-3 py-1">3. 完了</div>
        </div>
    </div>
    <div class="my-10">
        <div class="flex items-center w-3/4 mx-auto border-t border-x border-black">
            <div class="flex w-1/3 mx-auto items-center justify-center">
                <span class="w-2/3 mx-auto text-left font-bold text-black">お問合せ内容</span>
                <label class="w-max px-3 py-1 mx-auto text-left bg-[#ed6103] text-white font-bold">必須</label>
            </div>
            <div class="w-2/3 mx-auto border-l px-5 bg-[#fffddd]">
                <div class="grid grid-cols-2 gap-2 pt-5 pb-3">
                    <div class="flex items-center space-x-3">
                        <input type="checkbox" />
                        <label>最新の情報を知りたい</label>
                    </div>
                    <div class="flex items-center space-x-3">
                        <input type="checkbox" />
                        <label>物件を実際に見に行きたい</label>
                    </div>
                    <div class="flex items-center space-x-3">
                        <input type="checkbox" />
                        <label>その他</label>
                    </div>
                </div>
                <span class="text-xs text-red-600">※すでにご契約された物件や、現在お住まいの物件に関するご意見・ご質問は物件の管理会社に直接ご連絡ください</span>
            </div>
        </div>
        <div class="flex items-center w-3/4 mx-auto border-t border-x border-black">
            <div class="flex w-1/3 mx-auto items-center justify-center">
                <span class="w-2/3 mx-auto text-left font-bold text-black">お名前</span>
                <label class="w-max px-3 py-1 mx-auto text-center bg-[#ed6103] text-white font-bold">必須</label>
            </div>
            <div class="w-2/3 mx-auto border-l p-5 bg-[#fffddd]">
                <input type="text" class="w-5/6 border rounded" placeholder="例: 山田太郎" />
            </div>
        </div>
        <div class="flex items-center w-3/4 mx-auto border-t border-x border-black">
            <div class="w-1/3 mx-auto">
                <div class="flex items-center justify-center">
                    <span class="w-2/3 mx-auto text-left font-bold text-black">ご希望の連絡方法</span>
                    <label class="w-max px-3 py-1 mx-auto text-center bg-[#ed6103] text-white font-bold">必須</label>
                </div>
                <p class="text-sm ml-3">※いずれか1つ以上</p>
            </div>
            <div class="w-2/3 mx-auto border-l px-5 py-3 space-y-5 bg-[#fffddd]">
                <div class="flex items-center">
                    <label class="w-1/6">メールアドレス</label>
                    <input type="text" class="w-2/3 border rounded" placeholder="例: yamada_t@sample.co.jp" />
                </div>
                <div class="flex items-center">
                    <label class="w-1/6">電話番号</label>
                    <input type="text" class="w-2/3 border rounded" placeholder="例: 08099998888 (ハイフン不要)" />
                </div>
            </div>
        </div>
        <div class="flex items-center w-3/4 mx-auto border-t border-x border-black">
            <div class="flex w-1/3 mx-auto items-center justify-center">
                <span class="w-2/3 mx-auto text-left font-bold text-black">お住まいの売却</span>
                <label class="w-max px-3 py-1 mx-auto text-left bg-[#778d95] text-white font-bold">任意</label>
            </div>
            <div class="w-2/3 mx-auto border-l px-5 py-3">
                <div class="flex items-center space-x-3">
                    <input type="checkbox" />
                    <label>検討している</label>
                </div>
                <span class="text-xs text-gray-700">※お問合せ後、売却査定サービスをご案内します。ご希望があればご利用ください</span>
            </div>
        </div>
        <div class="flex items-center w-3/4 mx-auto border border-black">
            <div class="flex w-1/3 mx-auto items-center">
                <span class="text-left font-bold text-black ml-3">弊社からのお知らせ</span>
            </div>
            <div class="w-2/3 mx-auto border-l px-5 py-3">
                <div class="flex items-center space-x-3">
                    <input type="checkbox" checked="checked" />
                    <label>メールを受け取る</label>
                </div>
                <span class="text-xs text-gray-700">希望に近い物件情報や大手引越し会社の料金30％割引など、お得な情報をお届けします</span>
            </div>
        </div>
    </div>
    <div class="my-5">
        <div class="w-2/5 mx-auto py-5 px-8 bg-gradient-to-b from-[rgb(220,220,220)] to-[rgb(170,180,200)] rounded-full text-center text-white">
            <span class="font-bold text-2xl">確認ページへ進む</span>
        </div>
    </div>

    <div class="my-12 w-10/12 mx-auto">
        <BuildingCard url="/about" building-name="マリオン川口第２ 西川口駅" />
    </div>
  </div>
</template>
