import { defineConfig } from 'vite'
import { resolve, dirname } from 'path'
import { fileURLToPath } from 'url'

const __dirname = dirname(fileURLToPath(import.meta.url))

export default defineConfig({
  css: {
    preprocessorOptions: {
      scss: {
        api: 'modern-compiler',
      },
    },
  },
  build: {
    rollupOptions: {
      input: {
        index: resolve(__dirname, 'index.html'),
        archivePlan: resolve(__dirname, 'archive-plan.html'),
        archiveColumn: resolve(__dirname, 'archive-column.html'),
        archiveVoice: resolve(__dirname, 'archive-voice.html'),
        singlePlan: resolve(__dirname, 'single-plan.html'),
        singleColumn: resolve(__dirname, 'single-column.html'),
        singleVoice: resolve(__dirname, 'single-voice.html'),
        pageContact: resolve(__dirname, 'page-contact.html'),
      },
      output: {
        assetFileNames: (assetInfo) => {
          const name = assetInfo.names?.[0] ?? ''
          if (name.endsWith('.css')) {
            return 'assets/css/[name][extname]'
          }
          return 'assets/[name][extname]'
        },
      },
    },
  },
})
