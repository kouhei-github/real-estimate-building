<template>
  <Html :class="`${theme === 'dark' ? 'dark' : ''}`" :lang="locale">
    <Body
      class=""
    >
      <NuxtLayout>
        <NuxtPage />
      </NuxtLayout>
    </Body>
  </Html>
</template>

<script lang="ts" setup>
  import { AppSetup } from './utils/app'
  import { ITheme } from './utils/theme'
  AppSetup()
  const theme = useState<ITheme>('theme.current')
  const locale = useState<string>('locale.setting')
</script>

<style>

</style>