//SearchBar
import React from "react";

type SearchBarProps = {
    query: string;
    onQueryChange: (newQuery: string) => void;
};

const SearchBar: React.FC<SearchBarProps> = ({ query, onQueryChange }) => {
    return (
        <input
            type="text"
            value={query}
            onChange={(e) => onQueryChange(e.target.value)}
            placeholder="Search products..."
        />
    );
};

export default SearchBar;
