import Vue          from 'vue'
import addSection   from '../../app/addSection'
import liste        from '../../app/liste'

Vue.component('ingredients',{
    props: ['data'],

    components: {
        addSection,
        liste
    },


    data() {
        return {

        }
    }
})
