export default {

    // link = 'https://api-dev.positiveinternetsolution.com/api/'
    // link1 = 'http://localhost:3001/api/'
    //dev
    url: 'https://pis-api.positiveinternetsolution.com/',
    path: 'https://pis-api.positiveinternetsolution.com/api/',
    web_url: 'https://positiveinternetsolution.com/'

    // dev 2
    // path: 'http://localhost/pis-api-main/public/api/',
    // absolute: 'http://localhost/pis-api-main/public/',
    // url: 'http://localhost/pis-app/public/'

}

export function _buildQuery(params) {
    let string = ''

    for (let key in params) {
        if (params[key] !== "") {
            string += `${key}=${params[key]}&`
        }
    }
    string = '?' + string.substring(0, string.length - 1)
    return string;
}