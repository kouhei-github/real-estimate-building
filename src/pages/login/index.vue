<script setup lang="ts">
definePageMeta({
  middleware: ['auth']
})
const email = ref('')
const password = ref('')
const isSignUp = ref(false)
const signUp = async () => {
}

const login = async () => {

}

</script>

<template>
  <div class="max-w-lg mx-auto mt-8">
    <h1 class="text-3xl font-black text-white">LearnVue Nuxt Demo</h1>
    <p class="mt-4">
      Welcome to the LearnVue Nuxt demo. Any YouTube tutorials relating to Nuxt
      will be made to this project.
    </p>
    <NuxtLink
      to="#"
      target="_blank"
      class="inline-block px-4 py-2 mt-4 font-medium text-white rounded bg-green hover:bg-green-400"
    >
      Nuxt Video Playlist
    </NuxtLink>
    <form
      @submit.prevent="() => (isSignUp ? signUp() : login())"
      class="flex flex-col gap-2 mt-16"
    >
      <input
        type="email"
        placeholder="Email"
        v-model="email"
        class="p-2 text-white rounded bg-charcoal-600"
      />
      <input
        type="password"
        placeholder="Password"
        v-model="password"
        class="p-2 text-white rounded bg-charcoal-600"
      />
      <button
        type="submit"
        class="p-2 font-medium text-white bg-green-500 rounded hover:bg-green-400"
      >
        <span v-if="isSignUp"> Sign up </span>
        <span v-else> Log in </span>
      </button>
    </form>
    <button
      @click="isSignUp = !isSignUp"
      class="w-full mt-8 text-sm text-center underline text-slate-300"
    >
      <span v-if="isSignUp"> Have an account? Log in instead </span>
      <span v-else> Create a new account </span>
    </button>
  </div>
</template>