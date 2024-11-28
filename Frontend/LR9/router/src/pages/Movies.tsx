import Card from "../components/Card";
import "../assets/styles/Page.css";

const movies = [
  {
    id: 1,
    title: "Фильм 1",
    year: 2014,
    category: "Фильмы",
    image: "/src/assets/images/movie.jpg",
  },
  {
    id: 2,
    title: "Фильм 2",
    year: 2010,
    category: "Фильмы",
    image: "/src/assets/images/movie.jpg",
  },
  {
    id: 3,
    title: "Фильм 3",
    year: 2010,
    category: "Фильмы",
    image: "/src/assets/images/movie.jpg",
  },
  {
    id: 4,
    title: "Фильм 4",
    year: 2010,
    category: "Фильмы",
    image: "/src/assets/images/movie.jpg",
  },
  {
    id: 5,
    title: "Фильм 5",
    year: 2010,
    category: "Фильмы",
    image: "/src/assets/images/movie.jpg",
  },
  {
    id: 6,
    title: "Фильм 6",
    year: 2010,
    category: "Фильмы",
    image: "/src/assets/images/movie.jpg",
  },
];

const Movies = () => {
  return (
    <main className="page">
      <h1>Фильмы</h1>
      <div className="catalog">
        {movies.map((movie) => (
          <Card
            key={movie.id}
            image={movie.image}
            title={movie.title}
            year={movie.year}
            category={movie.category}
          />
        ))}
      </div>
    </main>
  );
};

export default Movies;
