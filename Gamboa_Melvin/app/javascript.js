const word = [...'TheQuickBrownFoxJumpsOverTheLazyDog'];
const newWord = word.map((char, idx) => {
    if (idx == 0) {
        return char;
    } else {
        return char == char.toUpperCase() ? ` ${char.toLowerCase()}` : char
    }
});

alert(newWord.join(''));