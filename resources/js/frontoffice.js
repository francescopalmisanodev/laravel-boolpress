import Vue from 'vue';
import App from './view/App';

const root=new Vue({
    el:'#root',
    render:h=>h(App),
})