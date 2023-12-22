import pandas as pd
df = pd.read_csv("../edu_bigdata_imp1.csv", encoding='big5', low_memory=False)

count = df[df["dp002_extensions_alignment"]=='["校園職業安全"]']
print(len(count))