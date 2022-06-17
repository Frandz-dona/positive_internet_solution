<template>
    <table class="table">
        <thead class="thead-dark order-table-thead" style="color: #0a1a2d">
            <tr>
                <th scope="col">Monnaies</th>
                <th scope="col">Prix 24h</th>
                <th scope="col">Volume 24h</th>
                <th scope="col">Dernier Trade</th>
            </tr>
        </thead>
        <tbody v-for="elements in data" :key="elements.id">
            <tr>
                <th scope="row">
                    {{ elements.symbol }}
                </th>
                <td>${{ elements.price_24h }}</td>
                <td>{{ elements.volume_24h }}M</td>
                <td id="crypto_change">${{ elements.last_trade_price }}</td>
            </tr>
        </tbody>
    </table>
</template>
<script>
import CryptoService from "../../services/accueil_services/crypto.service";
import appPath from "../../helper/api";

export default {
    data() {
        return {
            data: [],
            link: appPath.web_url,
        };
    },
    mounted() {
        this.loadCryptos();
    },
    methods: {
        async loadCryptos() {
            CryptoService.getCryptomonnaies().then(
                (response) => {
                    this.data = response.data;
                },
                (error) => {
                    this.content =
                        (error.response &&
                            error.response.data &&
                            error.response.data.message) ||
                        error.message ||
                        error.toString();
                }
            );
        },
    },
};
</script>
<style>
.order-table-thead {
    background-color: #ff3300;
}
.order-table-thead th {
    color: #fff;
}
.order-table-thead th:first-child {
    border-radius: 10px 0 0 0;
}

.order-table-thead th:last-child {
    border-radius: 0 10px 0 0;
}
</style>
