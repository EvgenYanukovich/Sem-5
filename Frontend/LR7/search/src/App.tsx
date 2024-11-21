//App
import React, { useState } from "react";
import PRODUCTS from "./state/state";
import SearchBar from "./components/SearchBar";
import ProductList from "./components/ProductList";
import styles from "./App.module.css";

const App: React.FC = () => {
  const [query, setQuery] = useState<string>("");

  const filteredProducts = PRODUCTS.filter((product) =>
    product.name.toLowerCase().includes(query.toLowerCase())
  );

  return (
    <div className={styles.appContainer}>
      <h1>Product Search</h1>
      <SearchBar query={query} onQueryChange={setQuery} />
      <ProductList products={filteredProducts} />
    </div>
  );
};

export default App;
