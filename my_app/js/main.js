const {createApp} = Vue;

const app = createApp({
    data(){
        return {
            tasks: []
        }
    },
    created(){
        axios.get('https://localhost/php-todo-list-json/api/tasks/')
        .then(res => {
            this.tasks = res.data;
        });
    }
})

app.mount('#app')