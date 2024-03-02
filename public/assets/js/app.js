import axios from 'axios';

async function getStarWarsPlanet(){
try {
    const {data} = await axios.get('http://swapi.dev/api/planets/1/');
    console.log(data);
} catch (error) {
    console.log(error.response);
}
}

getStarWarsPlanet();