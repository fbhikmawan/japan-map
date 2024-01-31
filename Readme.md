# Japanese GeoInformation Map

This project is a web application related to disaster preparedness in Japan. It uses D3.js and TopoJSON libraries to create interactive maps and visualizations.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

You need to have Node.js and npm installed on your machine. You can download Node.js from [here](https://nodejs.org/).

### Installing

Clone the repository:

```bash
git clone git@github.com:fbhikmawan/japan-map.git
```

Navigate to the project directory:

```bash
cd japan-map
```

Install the dependencies:

```bash
npm install
```

### Running the Application

Start the application:

```bash
npm start
```

Open your browser and navigate to `http://localhost:3000`.

## Project Structure

- `index.html`: The main HTML file for the web project.
- `map.js`: Responsible for creating interactive maps or visualizations using the D3.js and TopoJSON libraries.
- `api/data.php`: Handles data requests or processing on the server-side.
- `data/pref.json`: Contains specific data related to Japan, possibly used for visualizations or mapping. This file is created by converting the map data into GeoJSON.

## Built With

- [D3.js](https://d3js.org/) - A JavaScript library for creating interactive data visualizations.
- [TopoJSON](https://github.com/topojson/topojson) - A JavaScript library for working with TopoJSON, a format for encoding geographic data.

## Authors

- Your Name - Initial work

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details