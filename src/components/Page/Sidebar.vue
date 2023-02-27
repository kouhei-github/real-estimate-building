<script lang="ts" setup>

import {reactive} from '@vue/reactivity'

const pricies = ref<Array<string>>(
    [
      '300万円　',
      '500万円　',
      '800万円　',
      '1000万円　',
      '1500万円　',
      '2000万円　',
      '2500万円　',
      '3000万円　',
      '4000万円　',
      '5000万円　',
      '6000万円　',
      '7000万円　',
      '8000万円　',
      '9000万円　',
      '1億円　',
      '2億円　',
      '3億円　'
    ]
)

const goods = ref<Array<string>>(
    [
        '5%', '6%', '7%', '8%', '9%',
      '10%', '11%', '12%', '13%', '14%',
      '15%', '16%', '17%', '18%', '19%',
      '20%', '25%', '30%'
    ]
)

</script>

<template>
  <div class="space-y-11 bg-white">
    <div class="border border-gray-400 rounded-t-md rounded-b-md">
      <div class="bg-black text-white font-bold text-center rounded-t-md py-3">選択中の検索条件</div>
      <div class="border py-3 px-2 text-center w-10/12 mx-auto my-3">絞り込み条件なし</div>
      <div class="text-blue-600 font-bold underline underline-offset-2 my-3 text-right pr-2 cursor-pointer">この条件を保存する</div>
    </div>

    <div class="border border-gray-400 rounded-t-md  rounded-b-md">
      <div class="bg-black text-white font-bold text-center rounded-t-md py-3">検索条件を設定・変更</div>
      <div class="w-full border-b border-gray-300">
        <div class="w-11/12 mx-auto">
          <div class="mt-2 mb-4 space-y-3">
            <p class="text-sm font-bold text-gray-400 my-3">所在地</p>
            <p class="text-sm">全国</p>
          </div>
          <div class="flex items-center justify-center mb-3">
            <div class="border rounded-md px-2 py-2 hover:bg-gray-200 cursor-pointer">地域を選択</div>
            <div class="border rounded-md px-2 py-2 hover:bg-gray-200 cursor-pointer">路線を選択</div>
          </div>
        </div>
      </div>

      <div class="w-full border-b border-gray-300">
        <div class="w-11/12 mx-auto">
          <p class="text-sm font-bold text-gray-400 my-3">掲載開始日</p>
          <div class="grid grid-cols-2 grid-rows-2 gap-2">
            <div class="flex items-center justify-center space-x-3">
              <input class="w-1/6" type="radio" name="select" />
              <label class="w-5/6" for="nothing">指定なし</label>
            </div>
            <div class="flex items-center justify-center space-x-3">
              <input class="w-1/6" type="radio" name="select" />
              <label class="w-5/6" for="nothing">本日掲載</label>
            </div>
            <div class="flex items-center justify-center space-x-3">
              <input class="w-1/6" type="radio" name="select" />
              <label class="w-5/6" for="nothing">3日以内</label>
            </div>
            <div class="flex items-center justify-center space-x-3">
              <input class="w-1/6" type="radio" name="select" />
              <label class="w-5/6" for="nothing">7日以内</label>
            </div>
          </div>
        </div>
      </div>

      <div class="w-full border-b border-gray-300 my-2">
        <div class="w-11/12 mx-auto">
          <p class="text-sm font-bold text-gray-400 my-3">物件価格</p>
          <div class="space-y-3 mb-4">
            <select class="w-full py-2 px-1">
              <option value="下限なし">下限なし</option>
              <option v-for="(val, key) in pricies" :key="key" :value="val">{{ val }}</option>
            </select>
            <select class="w-full py-2 px-1">
              <option value="上限なし">上限なし</option>
              <option v-for="(val, key) in pricies" :key="key" :value="val">{{ val }}</option>
            </select>
          </div>
        </div>
      </div>

      <div class="w-full border-b border-gray-300 my-2">
        <div class="w-11/12 mx-auto">
          <p class="text-sm font-bold text-gray-400 my-3">利回り</p>
          <div class="space-y-3 mb-4">
            <select class="w-full py-2 px-1">
              <option value="下限なし">下限なし</option>
              <option v-for="(val, key) in goods" :key="key" :value="val">{{ val }}</option>
            </select>
            <select class="w-full py-2 px-1">
              <option value="上限なし">上限なし</option>
              <option v-for="(val, key) in goods" :key="key" :value="val">{{ val }}</option>
            </select>
          </div>
        </div>
      </div>

      <div class="w-full border-b border-gray-300 my-2">
        <div class="w-11/12 mx-auto">
          <p class="text-sm font-bold text-gray-400 my-3">物件種別</p>
          <div class="space-y-3 mb-4">
            <div class="flex items-center justify-center space-x-3">
              <input class="w-1/12" type="checkbox" />
              <label class="w-11/12" for="nothing">区分マンション</label>
            </div>
            <div class="flex items-center justify-center space-x-3">
              <input class="w-1/12" type="checkbox" />
              <label class="w-11/12" for="nothing">売りアパート</label>
            </div>
            <div class="flex items-center justify-center space-x-3">
              <input class="w-1/12" type="checkbox" />
              <label class="w-11/12" for="nothing">一棟マンション</label>
            </div>
            <div class="flex items-center justify-center space-x-3">
              <input class="w-1/12" type="checkbox" />
              <label class="w-11/12" for="nothing">戸建賃貸</label>
            </div>
            <div class="flex items-center justify-center space-x-3">
              <input class="w-1/12" type="checkbox" />
              <label class="w-11/12" for="nothing">収益ビル</label>
            </div>
            <div class="flex items-center justify-center space-x-3">
              <input class="w-1/12" type="checkbox" />
              <label class="w-11/12" for="nothing">店舗・事務所・その他</label>
            </div>
            <div class="flex items-center justify-center space-x-3">
              <input class="w-1/12" type="checkbox" />
              <label class="w-11/12" for="nothing">土地</label>
            </div>
          </div>
        </div>
      </div>

      <div class="w-full border-b border-gray-300 my-2">
        <div class="w-11/12 mx-auto">
          <p class="text-sm font-bold text-gray-400 my-3">建物構造</p>
          <div class="mb-4 grid grid-cols-2 grid-rows-2 gap-3">
            <div class="flex items-center justify-center space-x-3">
              <input class="w-1/6" type="checkbox" />
              <label class="w-5/6" for="nothing">木造</label>
            </div>
            <div class="flex items-center justify-center space-x-3">
              <input class="w-1/6" type="checkbox" />
              <label class="w-5/6" for="nothing">軽量鉄骨造</label>
            </div>
            <div class="flex items-center justify-center space-x-3">
              <input class="w-1/6" type="checkbox" />
              <label class="w-5/6" for="nothing">鉄骨造</label>
            </div>
            <div class="flex items-center justify-center space-x-3">
              <input class="w-1/6" type="checkbox" />
              <label class="w-5/6" for="nothing">ブロック造</label>
            </div>
            <div class="flex items-center justify-center space-x-3">
              <input class="w-1/6" type="checkbox" />
              <label class="w-5/6" for="nothing">RC</label>
            </div>
            <div class="flex items-center justify-center space-x-3">
              <input class="w-1/6" type="checkbox" />
              <label class="w-5/6" for="nothing">SRC</label>
            </div>
          </div>
        </div>
      </div>

      <div class="w-full border-b border-gray-300 my-2">
        <div class="w-11/12 mx-auto">
          <p class="text-sm font-bold text-gray-400 my-3">築年数</p>
          <div class="space-y-3 mb-4">
            <select class="w-full py-2 px-1">
              <option value="下限なし">下限なし</option>
              <option v-for="(val, key) in goods" :key="key" :value="val">{{ val }}</option>
            </select>
            <select class="w-full py-2 px-1">
              <option value="上限なし">上限なし</option>
              <option v-for="(val, key) in goods" :key="key" :value="val">{{ val }}</option>
            </select>
            <div class="flex items-center justify-center space-x-3">
              <input class="w-1/12" type="checkbox" />
              <label class="w-11/12" for="nothing">新築・未完成のみ</label>
            </div>
          </div>
        </div>
      </div>

      <div class="w-full border-b border-gray-300 my-2">
        <div class="w-11/12 mx-auto">
          <p class="text-sm font-bold text-gray-400 my-3">総区画／戸数</p>
          <div class="space-y-3 mb-4">
            <select class="w-full py-2 px-1">
              <option value="下限なし">下限なし</option>
              <option v-for="(val, key) in goods" :key="key" :value="val">{{ val }}</option>
            </select>
            <select class="w-full py-2 px-1">
              <option value="上限なし">上限なし</option>
              <option v-for="(val, key) in goods" :key="key" :value="val">{{ val }}</option>
            </select>
          </div>
        </div>
      </div>

      <div class="w-full border-b border-gray-300">
        <div class="w-11/12 mx-auto">
          <p class="text-sm font-bold text-gray-400 my-3">掲載開始日</p>
          <div class="grid grid-cols-2 grid-rows-2 gap-2">
            <div class="flex items-center justify-center space-x-3">
              <input class="w-1/6" type="radio" name="situation" />
              <label class="w-5/6" for="nothing">指定なし</label>
            </div>
            <div class="flex items-center justify-center space-x-3">
              <input class="w-1/6" type="radio" name="situation" />
              <label class="w-5/6" for="nothing">満室</label>
            </div>
            <div class="flex items-center justify-center space-x-3">
              <input class="w-1/6" type="radio" name="situation" />
              <label class="w-5/6" for="nothing">賃貸中</label>
            </div>
            <div class="flex items-center justify-center space-x-3">
              <input class="w-1/6" type="radio" name="situation" />
              <label class="w-5/6" for="nothing">空家・空室</label>
            </div>
          </div>
        </div>
      </div>

      <div class="w-full border-b border-gray-300 my-2">
        <div class="w-11/12 mx-auto">
          <p class="text-sm font-bold text-gray-400 my-3">駅徒歩</p>
          <div class="space-y-3 mb-4">
            <select class="w-full py-2 px-1">
              <option value="指定なし">指定なし</option>
              <option v-for="(val, key) in goods" :key="key" :value="val">{{ val }}</option>
            </select>
          </div>
        </div>
      </div>

      <div class="w-full border-b border-gray-300 my-2">
        <div class="w-11/12 mx-auto">
          <p class="text-sm font-bold text-gray-400 my-3">その他</p>
          <div class="mb-4 space-y-3">
            <div class="flex items-center justify-center space-x-3">
              <input class="w-1/12" type="checkbox" />
              <label class="w-11/12" for="nothing">家賃保証</label>
            </div>
            <div class="flex items-center justify-center space-x-3">
              <input class="w-1/12" type="checkbox" />
              <label class="w-11/12" for="nothing">駐車場あり</label>
            </div>
            <div class="flex items-center justify-center space-x-3">
              <input class="w-1/12" type="checkbox" />
              <label class="w-11/12" for="nothing">バス・トイレ別</label>
            </div>
            <div class="flex items-center justify-center space-x-3">
              <input class="w-1/12" type="checkbox" />
              <label class="w-11/12" for="nothing">エレベータあり</label>
            </div>
            <div class="flex items-center justify-center space-x-3">
              <input class="w-1/12" type="checkbox" />
              <label class="w-11/12" for="nothing">フローリング</label>
            </div>
            <div class="flex items-center justify-center space-x-3">
              <input class="w-1/12" type="checkbox" />
              <label class="w-11/12" for="nothing">室内洗濯機置き場あり</label>
            </div>
            <div class="flex items-center justify-center space-x-3">
              <input class="w-1/12" type="checkbox" />
              <label class="w-11/12" for="nothing">画像あり</label>
            </div>
            <div class="flex items-center justify-center space-x-3">
              <input class="w-1/12" type="checkbox" />
              <label class="w-11/12" for="nothing">図面あり</label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
