import { createApp } from 'vue'
import App from './App.vue'
import router from './router'

import './assets/plugins.css'
import './assets/base.css'

//import './assets/js/scripts.js'
//import './assets/js/plugins.js'
//import './assets/js/animated.headline.js'
//import './assets/js/map.js'
//import './assets/js/stars.js'


const app = createApp(App)

app.use(router)

app.mount('#app')
