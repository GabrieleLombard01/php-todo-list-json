const {createApp} = Vue;

const app = createApp({
    data(){
        return {
            tasks: ["HTML", "CSS", "Responsive design", "Javascript", "PHP"]
        }
    }
})

app.mount('#app')