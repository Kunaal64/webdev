#include <iostream>
using namespace std;

int main()
{
    int t, n;
    cin >> t;
    while (t--)
    {
        cin >> n;
        int  a[n], sum = 0, sr = 0, i, flag = 0;
        for (i = 0; i < n; i++)
        {
            cin >> a[i];
            if (a[i] != 0)
            {
                sr += a[i];
                // int sr1 = (float)(sr / (i + 1));
                // cout<<sr1<<endl;
                if ((float)sr / (i + 1) == 1)
                {
                    flag++;
                }
            }
        }
        cout << flag << endl;
    }

    return 0;
}
