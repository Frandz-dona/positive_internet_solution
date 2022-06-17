<template>
    <div>
        <ul>
            <div v-for="element in data" :key="element.id">
                <li><a :href="DetailUrl+element.pluck">{{element.name}}</a></li>
            </div>
        </ul>
    </div>
</template>

<script>
import {_buildQuery} from "../../helper/api";
import PiscategoriesService from "../../services/accueil_services/piscategories.service";
export default {
    data() {
        return {
            param: {
            limit: 10,
            sort_direction: 'desc'            
            },
            data: [],
            DetailUrl:appPath.web_url+'/topics/categories/'
        };
    },
    mounted() {
        this.loadCategories();
    },
    methods: {
        async loadCategories() {
            PiscategoriesService.getCategories(_buildQuery(this.param)).then(
                response => {
                    this.data = response.data;
                    console.log(this.data)
                },
                error => {
                    this.content =
                        (error.response &&
                            error.response.data &&
                            error.response.data.message) ||
                        error.message ||
                        error.toString();
                }
            );
        }
    }
};
</script>
<style>

</style>
