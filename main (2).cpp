#include<bits/stdc++.h>
using namespace std;
int main(){
    int t;
    cin>>t;
    while(t--){
        int n;
        cin>>n;
        vector<char>s;
        for(int i=0;i<n;i++){
            char ch;
            cin>>ch;
            s.push_back(ch);
        }
        int m=0;
        int c=0;
        for(int i=0;i<n;i++){
            if(s[i]=='.'){
                c++;
            }
            else if(s[i]=='#'){
                m+=c;       // tryit
                c=0;
            }
            if(c==3){
                    m+=--c;
                    c=0;
                }
            }
            m+=c;
        }
        cout<<m<<endl;
    }
    return 0;
}