<template>
    <table class="table">
        <thead class="thead-dark order-table-thead" style="color: #0A1A2D;">
            <tr>
                <th scope="col">Monnaies</th>
                <th scope="col">Prix 24h</th>
                <th scope="col">Dernier Trade</th>
            </tr>
        </thead>
        <tbody v-for="elements in data" :key="elements.id">
            <tr v-if="elements.symbol == 'BTC-USD'">
                <th scope="row">
                    <img
                        :src="link+cryptoImg.btc"
                        alt="BTC"
                    />
                    {{ elements.symbol }}
                </th>
                <td>${{ elements.price_24h }}</td>
                <td id="crypto_change">
                    ${{ elements.last_trade_price }}
                </td>
            </tr>

            <tr v-if="elements.symbol == 'ETH-USD'">
                <th scope="row">
                    <img
                        :src="link+cryptoImg.eth"
                        alt="ETH"
                    />
                    {{ elements.symbol }}
                </th>
                <td>${{ elements.price_24h }}</td>
                <td id="crypto_change">
                     ${{ elements.last_trade_price }}
                </td>
            </tr>
            <tr v-if="elements.symbol == 'DOGE-USD'">
                <th scope="row">
                    <img
                        :src="link+cryptoImg.doge"
                        alt="DOGE"
                    />
                    {{ elements.symbol }}
                </th>
                <td>${{ elements.price_24h }}</td>
                <td id="crypto_change">
                     ${{ elements.last_trade_price }}
                </td>
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
            cryptoImg: {
                btc : "pis_assets/images/cryptos/prices-btc.svg",
                eth : "pis_assets/images/cryptos/prices-eth.svg",
                doge : "pis_assets/images/cryptos/prices-doge.svg",
            },
            link: appPath.web_url
        };
    },
    mounted() {
        this.loadCryptos();
    },
    methods: {
        async loadCryptos() {
            CryptoService.getCryptomonnaies().then(
                response => {
                    this.data = response.data;
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
        // calucate_variation(price, last_trade_price) {
        //     let soustraction = last_trade_price - price;

        //     soustraction = soustraction / 100;

        //     return soustraction.toFixed(2);
        // }
    }
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
