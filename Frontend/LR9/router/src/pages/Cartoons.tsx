import Card from "../components/Card";
import "../assets/styles/Page.css";

const cartoons = [
  {
    id: 1,
    title: "Мультфильм 1",
    year: 2014,
    category: "Мультфильмы",
    image: "/src/assets/images/cartoon.png",
  },
  {
    id: 2,
    title: "Мультфильм 2",
    year: 2010,
    category: "Мультфильмы",
    image: "/src/assets/images/cartoon.png",
  },
  {
    id: 3,
    title: "Мультфильм 3",
    year: 2010,
    category: "Мультфильмы",
    image: "/src/assets/images/cartoon.png",
  },
  {
    id: 4,
    title: "Мультфильм 4",
    year: 2010,
    category: "Мультфильмы",
    image: "/src/assets/images/cartoon.png",
  },
  {
    id: 5,
    title: "Мультфильм 5",
    year: 2010,
    category: "Мультфильмы",
    image: "/src/assets/images/cartoon.png",
  },
  {
    id: 6,
    title: "Мультфильм 6",
    year: 2010,
    category: "Мультфильмы",
    image: "/src/assets/images/cartoon.png",
  },
];

const Movies = () => {
  return (
    <main className="page">
      <h1>Мультфильмы</h1>
      <div className="catalog">
        {cartoons.map((cartoon) => (
          <Card
            key={cartoon.id}
            image={cartoon.image}
            title={cartoon.title}
            year={cartoon.year}
            category={cartoon.category}
          />
        ))}
      </div>
    </main>
  );
};

export default Movies;
