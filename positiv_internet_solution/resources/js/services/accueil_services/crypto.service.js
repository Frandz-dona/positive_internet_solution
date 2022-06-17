import axios from 'axios';
import blockchain from "../../helper/blockchain";

class CryptoService {
  async getCryptomonnaies() {
    return  await axios.get(blockchain.path+'/tickers', { 
      //headers: {'Authorization': 'Bearer ' + auth.getSession()}
    });
    
  }
}

export default new CryptoService();