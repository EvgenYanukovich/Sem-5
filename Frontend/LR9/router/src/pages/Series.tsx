import Card from "../components/Card";
import "../assets/styles/Page.css";

const series = [
  {
    id: 1,
    title: "Сериал 1",
    year: 2014,
    category: "Сериалы",
    image: "/src/assets/images/cartoon.png",
  },
  {
    id: 2,
    title: "Сериал 2",
    year: 2010,
    category: "Сериалы",
    image: "/src/assets/images/cartoon.png",
  },
  {
    id: 3,
    title: "Сериал 3",
    year: 2010,
    category: "Сериалы",
    image: "/src/assets/images/cartoon.png",
  },
  {
    id: 4,
    title: "Сериал 4",
    year: 2010,
    category: "Сериалы",
    image: "/src/assets/images/cartoon.png",
  },
  {
    id: 5,
    title: "Сериал 5",
    year: 2010,
    category: "Сериалы",
    image: "/src/assets/images/cartoon.png",
  },
  {
    id: 6,
    title: "Сериал 6",
    year: 2010,
    category: "Сериалы",
    image: "/src/assets/images/cartoon.png",
  },
];

const Movies = () => {
  return (
    <main className="page">
      <h1>Сериалы</h1>
      <div className="catalog">
        {series.map((serie) => (
          <Card
            key={serie.id}
            image={serie.image}
            title={serie.title}
            year={serie.year}
            category={serie.category}
          />
        ))}
      </div>
    </main>
  );
};

export default Movies;
